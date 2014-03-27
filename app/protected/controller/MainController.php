<?php
/**
 * MainController
 * Feel free to delete the methods and replace them with your own code.
 *
 * @author darkredz
 */
class MainController extends DooController{


	/*	public function beforeRun($resource, $action){
     echo $resource;echo "<br>";
     echo $action;
     exit;  
	}*/


    public function index(){
        //echo 'hello world';
        #$this->render('calculator');
        $this->render('guestbook');

    }

    
/*	public function post(){
	    $a = $_POST['a'];
	    $b = $_POST['b'];
	    $i = $_POST['in'];
	    if ($i == '+'){
	        echo $a+$b;
	    }elseif ($i == '-'){
	        echo $a-$b;
	    }elseif ($i == '*'){
	        echo $a*$b;
	    }elseif ($i == '/'){
	        echo $a/$b;
	    }
	}
	

    public function post(){
	    $username = $_POST['username'];
	    $message = $_POST['message'];
	    // 现在来写进文本
	    $txt = 'g.txt';
	    Doo::loadHelper('DooFile');// 加载文件操作类
	    $file = new DooFile;
	    $file->create($txt, $username."\t".$message."\n", 'ab');
	    echo "提交成功";
	    echo '<meta http-equiv="refresh" content="1;url=/app/list"> ';
	    exit;
	}
	

	public function lists(){
	    $txt = 'g.txt';
	    $arr = file($txt);//file函数可以查看下手册，意思是一行行的读取
	    $data['arr'] = $arr; // 这里是把arr传值进模板
	    $this->renderc('list', $data);// 这里是直接读取 viewc 里的php模板
	}*/
	


	public function post(){
	    $username = $_POST['username'];
	    $message = $_POST['message'];
	    // 现在来写进数据库
	    Doo::loadModel('Guestbook');
	    $gb = new Guestbook();
	    $gb->dateline = time();
	    $gb->ip = $this->clientIP();
	    $gb->message = $message;
	    $gb->username = $username;
	    $gb->insert();
	    echo "提交成功";
	    echo '<meta http-equiv="refresh" content="1;url=/app/list"> ';
	    exit;
	}

	
/*  public function lists(){
	    Doo::loadModel('Guestbook');
	    $gb = new Guestbook();
	    $data['arr'] = $gb->find(array('asArray'=>true));
	    $this->renderc('lists', $data);// 这里是直接读取 viewc 里的php模板
	}
	*/


	public function lists(){
	    Doo::loadHelper('DooPager');
	    Doo::loadModel('Guestbook');
	    $gb = new Guestbook();
	    $total = $gb->count();
	    $pager = new DooPager(Doo::conf()->APP_URL.'page', $total, 4, 6);
	    if(isset($this->params['p'])){
	        $pager->paginate(intval($this->params['p']));
	    }else{
	        $pager->paginate(1);
	    }	    
	    $data['arr'] = $gb->limit($pager->limit, '', 'id', array('asArray'=>true));
	    $data['page'] = $pager;
	    $this->renderc('page', $data);// 这里是直接读取 viewc 里的php模板
	}
}
?>