<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Repository\ProductRepository;

class CartController extends AbstractController
{
    private $session;

    public function __construct(SessionInterface $session)
    {
        $this->session = $session;
    }

    /**
     * @Route("/cart", name="cart")
     */
    public function index(ProductRepository $productRepository)
    {
        $cart = $this->session->get("Cart", array());
        $Products = array();

        $totaal = 0;

        foreach($cart as $id => $product){
            array_push($Products, ["Aantal" => $product["Aantal"], "Product" => $productRepository->find($id)]);
            $totaal = $totaal + $product['Aantal'] * $productRepository->find($id)->getPrijs();
        }

        return $this->render('cart/index.html.twig', [
            "Products" => $Products,
            "totaal" => $totaal,
        ]);
    }

    public function removeAction($id)
    {
        // check the cart
        $session = $this->get('request_stack')->getCurrentRequest()->getSession();
        $cart = $session->get('cart', array());
        // if it doesn't exist redirect to cart index page. end
        if(!$cart[$id]) { $this->redirect( $this->generateUrl('cart') ); }
        // check if the $id already exists in it.
        if( isset($cart[$id]) ) {
            $cart[$id] = $cart[$id] - 1;
            if ($cart[$id] < 1) {
                unset($cart[$id]);
            }
        } else {
            return $this->redirect( $this->generateUrl('cart') );
        }
        $session->set('cart', $cart);
        //echo('<pre>');
        //print_r($cart); echo ('</pre>');die();
        return $this->redirect( $this->generateUrl('cart') );
    }
}
