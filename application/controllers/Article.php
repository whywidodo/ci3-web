<?php class Article extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('articlemodel');
	}

	public function index() {
		$data['articles'] = $this->articlemodel->getPublished();
		// $data['articles']=[ [ 'tittle'=>'Foo',
		// 'content'=>'Ini artikel tentang foo'
		// ],
		// [ 'tittle'=>'Bar',
		// 'content'=>'Ini artikel tentang Bar'
		// ]];

		if (count($data['articles']) > 0) {
			$this->load->view('articles/list_article.php', $data);
		}

		else {
			$this->load->view('articles/empty_article.php');
		}
	}

	public function show ($slug=null) {
		if(!$slug){
			show_404();
		}

		$data['article'] = $this->articlemodel->findbyslug($slug);

		if(!$data['article']){
			show_404();
		}

		$this->load->view('articles/show_article.php', $data);
	}
}

?>
