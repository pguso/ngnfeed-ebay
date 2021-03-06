<?php
/**
 * @author: Raul Rodriguez - raulrodriguez782@gmail.com
 * @created: 11/19/13 - 5:15 PM
 * 
 */

namespace D4m\NgnFeed\Ebay\Model;


class ProductListingDetails extends Entity
{
    protected $productID;
    protected $includeStockPhotoURL;
    protected $includePrefilledItemInformation;
    protected $useStockPhotoURLAsGallery;
    protected $stockPhotoURL;
    protected $copyright;
    protected $productReferenceID;
    protected $detailsURL;
    protected $productDetailsURL;
    protected $returnSearchResultOnDuplicates;
    protected $listIfNoProduct;
    protected $GTIN;
    protected $ISBN;
    protected $UPC;
    protected $EAN;
    protected $brandMPN;
    protected $ticketListingDetails;
    protected $useFirstProduct;
    protected $any;

    /**
     * @param mixed $any
     */
    public function setAny($any)
    {
        $this->any = $any;
    }

    /**
     * @return mixed
     */
    public function getAny()
    {
        return $this->any;
    }

    /**
     * @param mixed $brandMPN
     */
    public function setBrandMPN($brandMPN)
    {
        $this->brandMPN = $brandMPN;
    }

    /**
     * @return mixed
     */
    public function getBrandMPN()
    {
        return $this->brandMPN;
    }

    /**
     * @param mixed $copyright
     */
    public function setCopyright($copyright)
    {
        $this->copyright = $copyright;
    }

    /**
     * @return mixed
     */
    public function getCopyright()
    {
        return $this->copyright;
    }

    /**
     * @param mixed $detailsURL
     */
    public function setDetailsURL($detailsURL)
    {
        $this->detailsURL = $detailsURL;
    }

    /**
     * @return mixed
     */
    public function getDetailsURL()
    {
        return $this->detailsURL;
    }

    /**
     * @param mixed $ean
     */
    public function setEAN($ean)
    {
        $this->EAN = $ean;
    }

    /**
     * @return mixed
     */
    public function getEAN()
    {
        return $this->EAN;
    }

    /**
     * @param mixed $gtin
     */
    public function setGTIN($gtin)
    {
        $this->GTIN = $gtin;
    }

    /**
     * @return mixed
     */
    public function getGTIN()
    {
        return $this->GTIN;
    }

    /**
     * @param mixed $includePrefilledItemInformation
     */
    public function setIncludePrefilledItemInformation($includePrefilledItemInformation)
    {
        $this->includePrefilledItemInformation = $includePrefilledItemInformation;
    }

    /**
     * @return mixed
     */
    public function getIncludePrefilledItemInformation()
    {
        return $this->includePrefilledItemInformation;
    }

    /**
     * @param mixed $includeStockPhotoURL
     */
    public function setIncludeStockPhotoURL($includeStockPhotoURL)
    {
        $this->includeStockPhotoURL = $includeStockPhotoURL;
    }

    /**
     * @return mixed
     */
    public function getIncludeStockPhotoURL()
    {
        return $this->includeStockPhotoURL;
    }

    /**
     * @param mixed $isbn
     */
    public function setISBN($isbn)
    {
        $this->ISBN = $isbn;
    }

    /**
     * @return mixed
     */
    public function getISBN()
    {
        return $this->ISBN;
    }

    /**
     * @param mixed $listIfNoProduct
     */
    public function setListIfNoProduct($listIfNoProduct)
    {
        $this->listIfNoProduct = $listIfNoProduct;
    }

    /**
     * @return mixed
     */
    public function getListIfNoProduct()
    {
        return $this->listIfNoProduct;
    }

    /**
     * @param mixed $productDetailsURL
     */
    public function setProductDetailsURL($productDetailsURL)
    {
        $this->productDetailsURL = $productDetailsURL;
    }

    /**
     * @return mixed
     */
    public function getProductDetailsURL()
    {
        return $this->productDetailsURL;
    }

    /**
     * @param mixed $productID
     */
    public function setProductID($productID)
    {
        $this->productID = $productID;
    }

    /**
     * @return mixed
     */
    public function getProductID()
    {
        return $this->productID;
    }

    /**
     * @param mixed $productReferenceID
     */
    public function setProductReferenceID($productReferenceID)
    {
        $this->productReferenceID = $productReferenceID;
    }

    /**
     * @return mixed
     */
    public function getProductReferenceID()
    {
        return $this->productReferenceID;
    }

    /**
     * @param mixed $returnSearchResultOnDuplicates
     */
    public function setReturnSearchResultOnDuplicates($returnSearchResultOnDuplicates)
    {
        $this->returnSearchResultOnDuplicates = $returnSearchResultOnDuplicates;
    }

    /**
     * @return mixed
     */
    public function getReturnSearchResultOnDuplicates()
    {
        return $this->returnSearchResultOnDuplicates;
    }

    /**
     * @param mixed $stockPhotoURL
     */
    public function setStockPhotoURL($stockPhotoURL)
    {
        $this->stockPhotoURL = $stockPhotoURL;
    }

    /**
     * @return mixed
     */
    public function getStockPhotoURL()
    {
        return $this->stockPhotoURL;
    }

    /**
     * @param mixed $ticketListingDetails
     */
    public function setTicketListingDetails($ticketListingDetails)
    {
        $this->ticketListingDetails = $ticketListingDetails;
    }

    /**
     * @return mixed
     */
    public function getTicketListingDetails()
    {
        return $this->ticketListingDetails;
    }

    /**
     * @param mixed $upc
     */
    public function setUPC($upc)
    {
        $this->UPC = $upc;
    }

    /**
     * @return mixed
     */
    public function getUPC()
    {
        return $this->UPC;
    }

    /**
     * @param mixed $useFirstProduct
     */
    public function setUseFirstProduct($useFirstProduct)
    {
        $this->useFirstProduct = $useFirstProduct;
    }

    /**
     * @return mixed
     */
    public function getUseFirstProduct()
    {
        return $this->useFirstProduct;
    }

    /**
     * @param mixed $useStockPhotoURLAsGallery
     */
    public function setUseStockPhotoURLAsGallery($useStockPhotoURLAsGallery)
    {
        $this->useStockPhotoURLAsGallery = $useStockPhotoURLAsGallery;
    }

    /**
     * @return mixed
     */
    public function getUseStockPhotoURLAsGallery()
    {
        return $this->useStockPhotoURLAsGallery;
    }
} 