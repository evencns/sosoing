<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aindex extends My_Controller
{
    public function _init()
    {
        $this->load->database();
    }

    public function index()
    {
        var_dump($this);exit;
        // 热门推荐
//        $hots = $this->_getHots();
//
//        // 推荐排行
//        $tops = $this->_getTops();
//
//        // 网站公告
//        $announce = $this->_getAnnounce();
//
//        // 获取横幅
//        $banner = $this->_getBanner();

        // 相关产品
//        $related = $this->_getRelated();
//        echo '<pre>';print_r($related);exit;

//        $this->tpl->assign(array(
//            'hots'      => $hots,
//            'tops'      => $tops,
//            'announce'  => $announce,
//            'banner'    => $banner
//        ));
//        $this->tpl->display('sosohome.html');
        $this->load->view('sosohome');
    }

    /**
     * 热门推荐
     *
     */
    public function _getHots($limit = 5)
    {
        $goodsModel = new GoodsModel;

        // 获取热门推荐类型的商品ID列表
        $goodsIdList = $goodsModel->getRecommendGoodsIdListByRid(2, 0, $limit);

        // 通过商品ID列表获取对应的商品信息列表
        $recommendGoodsList = $goodsModel->getRecommendGoodsListByGoodsIdList($goodsIdList);

        return $recommendGoodsList;
    }

    /**
     * 推荐排行
     *
     */
    public function _getTops($limit = 5)
    {
        $goodsModel = new GoodsModel;

        // 获取热门推荐类型的商品ID列表
        $goodsIdList = $goodsModel->getRecommendGoodsIdList(0, $limit);

        // 通过商品ID列表获取对应的商品信息列表
        $recommendGoodsList = $goodsModel->getRecommendGoodsListByGoodsIdList($goodsIdList, 0, 5);

        return $recommendGoodsList;
    }

    /**
     * 网站公告
     *
     */
    public function _getAnnounce($limit = 5)
    {
        $contentModel = new ContentModel;

        $announceList = $contentModel->getAnnounceList(0, $limit);

        return $announceList;
    }

    /**
     * 获取横幅
     *
     */
    public function _getBanner($limit = 5)
    {
        $contentModel = new ContentModel;

        $bannerList = $contentModel->getBannerList(0, $limit);

        return $bannerList;
    }

    /**
     * 相关产品
     *
     */
    public function _getRelated($limit = 5)
    {
        $contentModel = new ContentModel;

        $relatedList = $contentModel->getRelatedList(0, $limit);

        return $relatedList;
    }
}

