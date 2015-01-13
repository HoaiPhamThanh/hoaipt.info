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
                        'chợ' ,'siêu thị','đại lý'
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
            array(
                'Category' => array(
                    'name' => 'phương tiện đi lại',
                    'sub_name' => array(
                        'sửa xe - rửa xe' ,'đại lý Honda' ,'đại lý Yamaha' ,'đại lý Piagio'
                    )
                )
            ),
            array(
                'Category' => array(
                    'name' => 'điện thoại - máy tính',
                    'sub_name' => array(
                        'siêu thị điện máy' ,'cửa hàng điện thoại','cửa hàng máy tính','sim thẻ'
                    )
                )
            ),
            array(
                'Category' => array(
                    'name' => 'điện thoại - máy tính',
                    'sub_name' => array(
                        'siêu thị điện máy' ,'cửa hàng điện thoại','cửa hàng máy tính'
                    )
                )
            ),
            array(
                'Category' => array(
                    'name' => 'sức khỏe',
                    'sub_name' => array(
                        'hiệu thuốc' ,'bệnh viện','khám răng','phòng khám'
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