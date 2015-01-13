<?php

class RecipesController extends AppController {

    public $components = array('RequestHandler');

    public function index() {
        
        $this->loadModel('Shop'); 
        $recipes = $this->Shop->find('all',array('limit' => 10));
        $this->set(array(
            'recipes' => $recipes,
            '_serialize' => array('recipes')
        ));
    }    
    
    public function category() {
        $category = array(
            array(
                'Category' => array(
                    'name' => 'thời trang nam',
                    'sub_name' => array(
                        'quần áo' ,'phụ kiện' ,'giày dép','mỹ phẩm'
                    )
                )
            ),
            array(
                'Category' => array(
                    'name' => 'thời trang nữ',
                    'sub_name' => array(
                        'quần áo' ,'phụ kiện' ,'giày dép','mỹ phẩm'
                    )
                )
            ),
            array(
                'Category' => array(
                    'name' => 'quán xá',
                    'sub_name' => array(
                        'cafe' ,'trà' ,'chè','kem','nước hoa quả','khác'
                    )
                )
            ),
            array(
                'Category' => array(
                    'name' => 'chợ',
                    'sub_name' => array(
                        'chợ' ,'siêu thị'
                    )
                )
            ),
            array(
                'Category' => array(
                    'name' => 'nhà hàng',
                    'sub_name' => array(
                        'thịt chó' ,'thịt vịt' ,'hải sản','châu âu','cơm bụi','bún-phở'
                    )
                )
            ),
        );
        $this->set(array(
            'category' => $category,
            '_serialize' => array('category')
        ));
    }

    public function view($id) {
        $recipe = $this->Recipe->findById($id);
        $this->set(array(
            'recipe' => $recipe,
            '_serialize' => array('recipe')
        ));
    }

    public function add() {
        $this->Recipe->create();
        if ($this->Recipe->save($this->request->data)) {
            $message = 'Saved';
        } else {
            $message = 'Error';
        }
        $this->set(array(
            'message' => $message,
            '_serialize' => array('message')
        ));
    }

    public function edit($id) {
        $this->Recipe->id = $id;
        if ($this->Recipe->save($this->request->data)) {
            $message = 'Saved';
        } else {
            $message = 'Error';
        }
        $this->set(array(
            'message' => $message,
            '_serialize' => array('message')
        ));
    }

    public function delete($id) {
        if ($this->Recipe->delete($id)) {
            $message = 'Deleted';
        } else {
            $message = 'Error';
        }
        $this->set(array(
            'message' => $message,
            '_serialize' => array('message')
        ));
    }
}