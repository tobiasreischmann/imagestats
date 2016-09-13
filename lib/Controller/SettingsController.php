<?php
/**
 * Created by IntelliJ IDEA.
 * User: tore
 * Date: 12.09.16
 * Time: 15:00
 */
namespace OCA\ImageStats\Controller;
use OCP\AppFramework\Controller;
use OCP\AppFramework\Http\DataResponse;

class SettingsController extends Controller{

    /**
     * @NoAdminRequired
     *
     * @return DataResponse
     */
    public function getDefaultConfig(){
        return new DataResponse([
            'íncludeThumbnails' => true
        ]);
    }

    /**
     * @NoAdminRequired
     *
     * @return DataResponse
     */
    public function setDefaultConfig(){
        return new DataResponse([
            'íncludeThumbnails' => true
        ]);
    }
}