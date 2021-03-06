<?php
namespace Home\Controller;
class UserController extends CommonController {
	//构造方法
	public function __construct() {
		parent::__construct();
		$allow_action = array( //指定不需要检查登录的方法列表
			'login','captcha','register'
		);
		if($this->userInfo === false && !in_array(ACTION_NAME,$allow_action)){
			$this->error('请先登录。',U('User/login'));
		}
	}
	//会员中心
	public function index(){
		$this->display();
	}
	//用户登录
	public function login() {
		//处理表单
		if (IS_POST) {
			//判断验证码
			$this->checkVerify(I('post.captcha'));
			$where = array(
              'user' => $data['user'],
            );
            $user = M('member')->where($where)->find();
            if($user){ //用户存在
                if($user['password']==md5(I('post.password'))){
                	session('user',$user);
					if($_SESSION['url']){
						header('location:'.$_SESSION['url']);
					}else{
						$this->success('登录成功，请稍后',U('Index/index'));//跳转到首页
					}
				}else{
                    $this->error('您输入的密码不正确，请重新输入！');
                }
            }else{ //用户不存在
                $this->error('用户不存在！');
            }
			//判断用户名和密码
//			$name = I('post.user','','trim');
//			$pwd = I('post.pwd','','trim');
//			$rst = D('member')->checkUser($name,$pwd);
//			if($rst!==true){
//				$this->error($rst);
//			}
//			$this->success('登录成功，请稍后',U('Index/index'));
//			return;
		}
		$this->display();
	}
	//退出
	public function logout(){
		session('[destroy]');
		$this->success('退出成功',U('Index/index'));
	}
	//注册新用户
	public function register() {
		if(IS_POST){
			$this->checkVerify(I('post.captcha'));
			$rst = $this->create('member','add');
			if($rst===false){
				$this->error($rst->getError());
			}
			$this->success('用户注册成功',U('Index/index'));
			//注册后自动登录
			$name = I('post.user','','trim');
			$pwd = I('post.pwd','','trim');
			D('member')->checkUser($name,$pwd);
			return ;
		}
		$this->display();
	}
	//生成验证码
	public function captcha() {
		$verify = new \Think\Verify();
		return $verify->entry();
	}
	//检查验证码
	private function checkVerify($code, $id = '') {
		$verify = new \Think\Verify();
		$rst = $verify->check($code, $id);
		if($rst!==true){
			$this->error('验证码输入有误');
		}
	}
}