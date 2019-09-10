<?php

namespace App\Controller;

use App\Form\CheckoutFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Repository\ProductRepository;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class CheckoutController extends AbstractController
{

    private $session;

    public function __construct(SessionInterface $session)
    {
        $this->session = $session;
    }

    /**
     * @Route("/checkout", name="checkout")
     */
    public function index(ProductRepository $productRepository, Request $request, \Swift_Mailer $mailer)
    {
        $cart = $this->session->get("Cart", array());
        $Products = array();
        $totaal = 0;
        $form = $this->createForm(CheckoutFormType::class);

        foreach($cart as $id => $product){
            array_push($Products, ["Aantal" => $product["Aantal"], "Product" => $productRepository->find($id)]);
            $totaal = $totaal + $product['Aantal'] * $productRepository->find($id)->getPrijs();
        }

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $formData = $form->getData();

            $message = (new \Swift_Message('Bevestegings Email!'))
                ->setFrom('info@webshop.com')
                ->setReplyTo('1024984@mborijnland.nl')
                ->setTo($formData['Email'])
                ->setBody(
                    $this->renderView(
                        'emails/checkout.html.twig',
                        ["Naam" => $formData["Naam"], "Products" => $Products]
                    ),
                    'text/html'
                )
            ;

            $mailer->send($message);

            $this->session->set("Cart", array());

            return $this->redirectToRoute('product_index');
        }

        return $this->render('checkout/index.html.twig', [
            "Products" => $Products,
            "totaal" => $totaal,
            "our_form" => $form->createView()
        ]);
    }
}
