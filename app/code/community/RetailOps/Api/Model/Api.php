<?php
/**
{license_text}
 */

class RetailOps_Api_Model_Api extends Mage_Api_Model_Resource_Abstract
{
    /**
     * Get Products
     *
     * @param mixed $filters
     * @return array
     */
    public function catalogPull($filters = null){
       return Mage::getModel('retailops_api/catalog_pull_api')->catalogPull($filters);
    }

    /**
     * Create/update Products
     *
     * @param mixed $filters
     * @return array
     */
    public function catalogPush($productsData){
       return Mage::getModel('retailops_api/catalog_push_api')->catalogPush($productsData);
    }

    /**
     * Product Inventory Update
     *
     * @param array $itemData
     * @return array
     */
    public function inventoryPush($itemData){
        return Mage::getModel('retailops_api/inventory_api')->inventoryPush($itemData);
    }

    /**
     * create Credit Memo
     *
     * @param mixed $returns
     * @return array
     */
    public function returnPush($returns){
        return Mage::getModel('retailops_api/return_api')->returnPush($returns);
    }

    /**
     * Get orders
     *
     * @param mixed $filters
     * @return array
     */
    public function orderPull($filters = null){
        return Mage::getModel('retailops_api/order_api')->orderPull($filters);
    }

    /**
     * Get Products
     *
     * @param mixed $shipments
     * @return array
     */
    public function shipmentPush($shipments = null){
        return Mage::getModel('retailops_api/shipment_api')->shipmentPush($shipments);
    }
}