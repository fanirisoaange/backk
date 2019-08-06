<?php
namespace AppBundle\Manager;


use AppBundle\Entity\Product;
use AppBundle\Repository\ProductRepositoryInterface;
use JMS\DiExtraBundle\Annotation as DI;

/**
 * @DI\Service("manager.product")
 */
class ProdManager implements ProductManagerInterface
{


    /**
     *
     * @var ProductRepositoryInterface
     */
    private $productRepository;

    /**
     * @DI\InjectParams({
     *     "productRepository" = @DI\Inject("service.repository.product")
     *     * })
     */
    public function __construct(ProductRepositoryInterface $productRepository
    ) {
        $this->productRepository = $productRepository;
    }
    public function createProduct($data) {
        $product = new Product();
        $product->setDesignation($data->designation);
        $product->setPrice($data->price);
        $product->setQuantity($data->quantity);

        /*if (!$this->validator->validateDo($product)) {
            return "DO invalide";
        }*/
        $this->productRepository->save($product, true, true);
        return $this->getSuccessMsg('Enregistrement avec success', $product);
    }

    public function updateProduct($id,$data)
    {
        $product = $this->productRepository->find($id);
        if (!$product) {
            return $this->getErrorMsg('Produit introuvable', 404);
        }
        if (!is_object($data)) {
            return $this->getErrorMsg("error format json",500);
        }
        $product->setDesignation($data->designation);
        $product->setPrice($data->price);
        $product->setQuantity($data->quantity);
        /*if (!$this->validator->validateDo($userDo)) {
            return $this->getErrorMsg("field error");
        }*/
        $this->productRepository->save($product, false, true);
        return $this->getSuccessMsg('Enregistrement avec success', $product);
    }


    public function getProduct(int $id)
    {
        $product = $this->productRepository->find($id);
        return $this->getSuccessMsg('', $product);
    }

    public function remove(int $id)
    {
        $object = $this->productRepository->get($id);
        $this->productRepository->remove($object);
        return $this->getSuccessMsg('Suppression avec succes', '');
    }

    public function getProducts()
    {
        $products = $this->productRepository->getAllProduct();
        return $this->getSuccessMsg('', $products);
    }

    private function getSuccessMsg($msg,$data){
        return [
                'success'           => true,
                'message'           => $msg,
                'code'              => 200,
                'data'              => $data
            ];
    }

    private function getErrorMsg($msg, $code){
        return [
                'success'           => false,
                'message'           => $msg,
                'code'              => $code,
                'data'              => ""
            ];
    }


}