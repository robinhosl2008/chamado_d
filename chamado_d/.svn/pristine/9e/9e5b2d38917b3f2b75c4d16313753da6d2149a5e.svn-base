<?
class Base_Util_Mensagem {

	public function mountMsg($msg){
		if(is_array($msg)){
			foreach($msg as $v){
				$strMsg .= $v . "<br>";
			}
			return $strMsg;
		}else{
			return $msg;
		}
	}
    public function msg($formato='',$title='',$msg='',$layout='default') {
        
        if($layout == 'default'){
             switch($formato) {
			default:
			break;
			case 'error':
				$this->strMsg='<div class="notification error_visual png_bg">
				<a href="#" class="close">
				<img src="/images/cross_grey_small.png" title="Fechar notificatção" alt="close" /></a>
				<div>'.$title.' '.$this->mountMsg($msg).'</div></div>';
			break;
			case 'success':
				$this->strMsg='<div class="notification success png_bg">
				<a href="#" class="close">
				<img src="/images/cross_grey_small.png" title="Close this notification" alt="close" /></a>
				<div>'.$title.' '.$this->mountMsg($msg).'</div>
			</div>';
			break;
                        case 'attention':
				$this->strMsg='<div class="notification attention png_bg">
				<a class="close" href="#">
				<img src="/images/cross_grey_small.png" title="Close this notification" alt="close" /></a>
				<div>'.$title.' '.$this->mountMsg($msg).'</div>
			</div>';
			break;
                        case 'inf':
                                $this->strMsg='<div class="notification information png_bg">
				<a href="#" class="close"><img src="/images/cross_grey_small.png" title="Fechar notificatção" alt="close" /></a>
				<div>Mensagem: '.$title.' '.$this->mountMsg($msg).'</div></div>';
			break;
                        case 'formErro':
                        $this->strMsg='<span class="input-notification error png_bg">'.$this->mountMsg($msg).'</span>';
			break;
                        case 'formSucess':
                  $this->strMsg='<span class="input-notification success png_bg">'.$this->mountMsg($msg).'</span>';
			break;



		}
        }else{
            switch($formato) {
			default:			
			break;
			case 'error':
				$this->strMsg='<div class="response-msg error ui-corner-all"><span>'.$title.'</span>'.$msg.'</div>';
			break;
			case 'notice':

				$this->strMsg='<div class="response-msg notice ui-corner-all">
					<span>Notice message</span>
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit
				</div>';
			break;
            case 'success':
				$this->strMsg='<div class="response-msg success ui-corner-all">
					<span>Success message</span>
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit
				</div>';
			break;
            case 'inf':
                $this->strMsg='<div class="response-msg inf ui-corner-all"><span>'.$title.'</span>'.$msg.'</div>';
			break;
		}
        }
		return $this->strMsg;
    }

}
