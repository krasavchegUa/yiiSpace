<?php
/**
 * Created by JetBrains PhpStorm.
 * User: yiqing
 * Date: 12-8-27
 * Time: 上午11:40
 * To change this template use File | Settings | File Templates.
 */
class UserHelper
{


  static public function renderUserIcon($user){
       $picId = rand(1,5);
       $userPhotoUrl = empty($user->profile->photo)? PublicAssets::instance()->url("images/user/avatars/5.jpg"): bu($user->profile->photo) ;
      $userImage = <<<U_FACE
      <div align="center" style="width:120px;height:120px;float:left;overflow:hidden;">
       <img src="{$userPhotoUrl}"
            alt=""
            class=""
            />
      </div>
U_FACE;
       echo $userImage ;
  }

}
