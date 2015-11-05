<?php
return array (
  'controllers' => 
  array (
    'invokables' => 
    array (
      'Home\\Model\\Consts' => 'Home\\Model\\Consts',
      'Home\\Controller\\Index' => 'Home\\Controller\\IndexController',
      'Home\\Controller\\Search' => 'Home\\Controller\\SearchController',
      'Home\\Controller\\Searchs' => 'Home\\Controller\\SearchsController',
      'Home\\Controller\\Loadview' => 'Home\\Controller\\LoadviewController',
      'Home\\Controller\\Media' => 'Home\\Controller\\MediaController',
      'User\\Controller\\User' => 'User\\Controller\\UserController',
      'User\\Controller\\Profile' => 'User\\Controller\\ProfileController',
      'User\\Controller\\Signin' => 'User\\Controller\\SigninController',
      'System\\Controller\\Index' => 'System\\Controller\\IndexController',
      'System\\Controller\\Feature' => 'System\\Controller\\FeatureController',
      'System\\Controller\\User' => 'System\\Controller\\UserController',
      'System\\Controller\\Tool' => 'System\\Controller\\ToolController',
      'System\\Controller\\Role' => 'System\\Controller\\RoleController',
      'System\\Controller\\Import' => 'System\\Controller\\ImportController',
      'System\\Controller\\Auto' => 'System\\Controller\\AutoController',
      'System\\Controller\\Api' => 'System\\Controller\\ApiController',
      'Address\\Controller\\Address' => 'Address\\Controller\\AddressController',
      'Address\\Controller\\City' => 'Address\\Controller\\CityController',
      'Address\\Controller\\District' => 'Address\\Controller\\DistrictController',
      'Address\\Controller\\Country' => 'Address\\Controller\\CountryController',
      'Website\\Controller\\Template' => 'Website\\Controller\\TemplateController',
      'Website\\Controller\\Domain' => 'Website\\Controller\\DomainController',
      'Subject\\Controller\\Subject' => 'Subject\\Controller\\SubjectController',
      'Admin\\Controller\\Index' => 'Admin\\Controller\\IndexController',
      'Admin\\Controller\\Subject' => 'Admin\\Controller\\SubjectController',
      'Admin\\Controller\\User' => 'Admin\\Controller\\UserController',
      'Admin\\Controller\\Expert' => 'Admin\\Controller\\ExpertController',
      'Expert\\Controller\\Index' => 'Expert\\Controller\\IndexController',
    ),
  ),
  'router' => 
  array (
    'routes' => 
    array (
      'home' => 
      array (
        'type' => 'Literal',
        'options' => 
        array (
          'route' => '/',
          'defaults' => 
          array (
            '__NAMESPACE__' => 'Home\\Controller',
            'controller' => 'Index',
            'action' => 'index',
          ),
        ),
        'may_terminate' => true,
        'child_routes' => 
        array (
          'default' => 
          array (
            'type' => 'Segment',
            'options' => 
            array (
              'route' => '/[:controller[/:action]]',
              'constraints' => 
              array (
                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
              ),
              'defaults' => 
              array (
                'controller' => 'Index',
                'action' => 'index',
              ),
            ),
          ),
        ),
      ),
      'homeAlias' => 
      array (
        'type' => 'Literal',
        'options' => 
        array (
          'route' => '/home',
          'defaults' => 
          array (
            '__NAMESPACE__' => 'Home\\Controller',
            'controller' => 'Index',
            'action' => 'index',
          ),
        ),
        'may_terminate' => true,
        'child_routes' => 
        array (
          'default' => 
          array (
            'type' => 'Segment',
            'options' => 
            array (
              'route' => '/[:controller[/:action]]',
              'constraints' => 
              array (
                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
              ),
              'defaults' => 
              array (
                'controller' => 'Index',
                'action' => 'index',
              ),
            ),
          ),
        ),
      ),
      'search' => 
      array (
        'type' => 'Literal',
        'options' => 
        array (
          'route' => '/search',
          'defaults' => 
          array (
            '__NAMESPACE__' => 'Home\\Controller',
            'controller' => 'Search',
            'action' => 'index',
          ),
        ),
        'may_terminate' => true,
        'child_routes' => 
        array (
          'suggestion' => 
          array (
            'type' => 'Literal',
            'options' => 
            array (
              'route' => '/suggestion',
              'defaults' => 
              array (
                '__NAMESPACE__' => 'Home\\Controller',
                'controller' => 'Search',
                'action' => 'suggestion',
              ),
            ),
          ),
          'noresult' => 
          array (
            'type' => 'Literal',
            'options' => 
            array (
              'route' => '/noresult',
              'defaults' => 
              array (
                '__NAMESPACE__' => 'Home\\Controller',
                'controller' => 'Search',
                'action' => 'noresult',
              ),
            ),
          ),
          'default' => 
          array (
            'type' => 'Segment',
            'options' => 
            array (
              'route' => '[/:action]',
              'constraints' => 
              array (
                '__NAMESPACE__' => 'Home\\Controller',
                'controller' => 'Search',
                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
              ),
              'defaults' => 
              array (
              ),
            ),
          ),
        ),
      ),
      'searchs' => 
      array (
        'type' => 'Literal',
        'options' => 
        array (
          'route' => '/searchs',
          'defaults' => 
          array (
            '__NAMESPACE__' => 'Home\\Controller',
            'controller' => 'Searchs',
            'action' => 'index',
          ),
        ),
        'may_terminate' => true,
        'child_routes' => 
        array (
          'suggestion' => 
          array (
            'type' => 'Literal',
            'options' => 
            array (
              'route' => '/suggestion',
              'defaults' => 
              array (
                '__NAMESPACE__' => 'Home\\Controller',
                'controller' => 'Searchs',
                'action' => 'suggestion',
              ),
            ),
          ),
          'default' => 
          array (
            'type' => 'Segment',
            'options' => 
            array (
              'route' => '[/:action]',
              'constraints' => 
              array (
                '__NAMESPACE__' => 'Home\\Controller',
                'controller' => 'Searchs',
                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
              ),
              'defaults' => 
              array (
              ),
            ),
          ),
        ),
      ),
      'loadview' => 
      array (
        'type' => 'Literal',
        'options' => 
        array (
          'route' => '/loadview',
          'defaults' => 
          array (
            '__NAMESPACE__' => 'Home\\Controller',
            'controller' => 'Home\\Controller\\Loadview',
            'action' => 'index',
          ),
        ),
        'may_terminate' => true,
        'child_routes' => 
        array (
          'default' => 
          array (
            'type' => 'Segment',
            'options' => 
            array (
              'route' => '[/:action]',
              'constraints' => 
              array (
                '__NAMESPACE__' => 'Home\\Controller',
                'controller' => 'Home\\Controller\\Loadview',
                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
              ),
              'defaults' => 
              array (
              ),
            ),
          ),
        ),
      ),
      'user' => 
      array (
        'type' => 'Literal',
        'priority' => 1000,
        'options' => 
        array (
          'route' => '/user',
          'defaults' => 
          array (
            '__NAMESPACE__' => 'User\\Controller',
            'controller' => 'User\\Controller\\User',
            'action' => 'index',
          ),
        ),
        'may_terminate' => true,
        'child_routes' => 
        array (
          'signin' => 
          array (
            'type' => 'Literal',
            'options' => 
            array (
              'route' => '/signin',
              'defaults' => 
              array (
                'controller' => 'User\\Controller\\User',
                'action' => 'signin',
              ),
            ),
          ),
          'signout' => 
          array (
            'type' => 'Literal',
            'options' => 
            array (
              'route' => '/signout',
              'defaults' => 
              array (
                'controller' => 'User\\Controller\\User',
                'action' => 'signout',
              ),
            ),
          ),
          'signup' => 
          array (
            'type' => 'Literal',
            'options' => 
            array (
              'route' => '/signup',
              'defaults' => 
              array (
                'controller' => 'User\\Controller\\User',
                'action' => 'signup',
              ),
            ),
          ),
          'active' => 
          array (
            'type' => 'Literal',
            'options' => 
            array (
              'route' => '/active',
              'defaults' => 
              array (
                'controller' => 'User\\Controller\\User',
                'action' => 'active',
              ),
            ),
          ),
          'getactivecode' => 
          array (
            'type' => 'Literal',
            'options' => 
            array (
              'route' => '/getactivecode',
              'defaults' => 
              array (
                'controller' => 'User\\Controller\\User',
                'action' => 'getactivecode',
              ),
            ),
          ),
          'getpassword' => 
          array (
            'type' => 'Literal',
            'options' => 
            array (
              'route' => '/getpassword',
              'defaults' => 
              array (
                'controller' => 'User\\Controller\\User',
                'action' => 'getpassword',
              ),
            ),
          ),
        ),
      ),
      'manage' => 
      array (
        'type' => 'Literal',
        'options' => 
        array (
          'route' => '/user',
          'defaults' => 
          array (
            '__NAMESPACE__' => 'User\\Controller',
            'controller' => 'Manage',
            'action' => 'index',
          ),
        ),
        'may_terminate' => true,
        'child_routes' => 
        array (
          'default' => 
          array (
            'type' => 'Segment',
            'options' => 
            array (
              'route' => '/[:controller[/:action]]',
              'constraints' => 
              array (
                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
              ),
              'defaults' => 
              array (
              ),
            ),
          ),
        ),
      ),
      'profile' => 
      array (
        'type' => 'Literal',
        'options' => 
        array (
          'route' => '/profile',
          'defaults' => 
          array (
            '__NAMESPACE__' => 'User\\Controller',
            'controller' => 'User\\Controller\\Profile',
            'action' => 'index',
          ),
        ),
        'may_terminate' => true,
        'child_routes' => 
        array (
          'edit' => 
          array (
            'type' => 'Literal',
            'options' => 
            array (
              'route' => '/edit',
              'defaults' => 
              array (
                'controller' => 'User\\Controller\\Profile',
                'action' => 'edit',
              ),
            ),
          ),
          'changepassword' => 
          array (
            'type' => 'Literal',
            'options' => 
            array (
              'route' => '/changepassword',
              'defaults' => 
              array (
                'controller' => 'User\\Controller\\Profile',
                'action' => 'changepassword',
              ),
            ),
          ),
        ),
      ),
      'signin' => 
      array (
        'type' => 'Literal',
        'options' => 
        array (
          'route' => '/signin',
          'defaults' => 
          array (
            '__NAMESPACE__' => 'User\\Controller',
            'controller' => 'User\\Controller\\Signin',
            'action' => 'index',
          ),
        ),
        'may_terminate' => true,
        'child_routes' => 
        array (
          'facebook' => 
          array (
            'type' => 'Literal',
            'options' => 
            array (
              'route' => '/facebook',
              'defaults' => 
              array (
                'controller' => 'User\\Controller\\Signin',
                'action' => 'facebook',
              ),
            ),
          ),
          'google' => 
          array (
            'type' => 'Literal',
            'options' => 
            array (
              'route' => '/google',
              'defaults' => 
              array (
                'controller' => 'User\\Controller\\Signin',
                'action' => 'google',
              ),
            ),
          ),
        ),
      ),
      'system' => 
      array (
        'type' => 'Literal',
        'options' => 
        array (
          'route' => '/system',
          'defaults' => 
          array (
            '__NAMESPACE__' => 'System\\Controller',
            'controller' => 'Index',
            'action' => 'index',
          ),
        ),
        'may_terminate' => true,
        'child_routes' => 
        array (
          'default' => 
          array (
            'type' => 'Segment',
            'options' => 
            array (
              'route' => '/[:controller[/:action]]',
              'constraints' => 
              array (
                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
              ),
              'defaults' => 
              array (
                'action' => 'index',
              ),
            ),
          ),
        ),
      ),
      'address' => 
      array (
        'type' => 'Literal',
        'options' => 
        array (
          'route' => '/address',
          'defaults' => 
          array (
            '__NAMESPACE__' => 'Address\\Controller',
            'controller' => 'Address\\Controller\\Address',
            'action' => 'index',
          ),
        ),
        'may_terminate' => true,
        'child_routes' => 
        array (
          'default' => 
          array (
            'type' => 'segment',
            'options' => 
            array (
              'route' => '[/:controller][/:action]',
              'constraints' => 
              array (
                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
              ),
              'defaults' => 
              array (
                '__NAMESPACE__' => 'Address\\Controller',
                'controller' => 'Address\\Controller\\Address',
                'action' => 'index',
              ),
            ),
          ),
          'book' => 
          array (
            'type' => 'segment',
            'options' => 
            array (
              'route' => '/book',
              'defaults' => 
              array (
                'controller' => 'Address\\Controller\\Address',
                'action' => 'book',
              ),
            ),
          ),
          'ajaxaddbook' => 
          array (
            'type' => 'segment',
            'options' => 
            array (
              'route' => '/ajaxaddbook',
              'defaults' => 
              array (
                'controller' => 'Address\\Controller\\Address',
                'action' => 'ajaxaddbook',
              ),
            ),
          ),
          'addbook' => 
          array (
            'type' => 'segment',
            'options' => 
            array (
              'route' => '/addbook',
              'defaults' => 
              array (
                'controller' => 'Address\\Controller\\Address',
                'action' => 'addbook',
              ),
            ),
          ),
          'editbook' => 
          array (
            'type' => 'segment',
            'options' => 
            array (
              'route' => '/editbook[/:id]',
              'constraints' => 
              array (
                'id' => '[0-9]+',
              ),
              'defaults' => 
              array (
                'controller' => 'Address\\Controller\\Address',
                'action' => 'editbook',
              ),
            ),
          ),
          'removebook' => 
          array (
            'type' => 'segment',
            'options' => 
            array (
              'route' => '/removebook',
              'defaults' => 
              array (
                'controller' => 'Address\\Controller\\Address',
                'action' => 'removebook',
              ),
            ),
          ),
        ),
      ),
      'website' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/website[/:controller][/:action]',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            '__NAMESPACE__' => 'Website\\Controller',
            'controller' => 'Website\\Controller\\Template',
            'action' => 'index',
          ),
        ),
      ),
      'subject' => 
      array (
        'type' => 'Literal',
        'options' => 
        array (
          'route' => '/subject',
          'defaults' => 
          array (
            '__NAMESPACE__' => 'Subject\\Controller',
            'controller' => 'Index',
            'action' => 'index',
          ),
        ),
        'may_terminate' => true,
        'child_routes' => 
        array (
          'default' => 
          array (
            'type' => 'Segment',
            'options' => 
            array (
              'route' => '/[:controller[/:action]]',
              'constraints' => 
              array (
                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
              ),
              'defaults' => 
              array (
              ),
            ),
          ),
        ),
      ),
      'admin' => 
      array (
        'type' => 'Literal',
        'options' => 
        array (
          'route' => '/admin',
          'defaults' => 
          array (
            '__NAMESPACE__' => 'Admin\\Controller',
            'controller' => 'Index',
            'action' => 'index',
          ),
        ),
        'may_terminate' => true,
        'child_routes' => 
        array (
          'default' => 
          array (
            'type' => 'Segment',
            'options' => 
            array (
              'route' => '/[:controller[/:action]]',
              'constraints' => 
              array (
                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
              ),
              'defaults' => 
              array (
              ),
            ),
          ),
        ),
      ),
      'expert' => 
      array (
        'type' => 'Literal',
        'options' => 
        array (
          'route' => '/experts',
          'defaults' => 
          array (
            '__NAMESPACE__' => 'Expert\\Controller',
            'controller' => 'Index',
            'action' => 'index',
          ),
        ),
        'may_terminate' => true,
        'child_routes' => 
        array (
          'default' => 
          array (
            'type' => 'Segment',
            'options' => 
            array (
              'route' => '/[:controller[/:action]]',
              'constraints' => 
              array (
                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
              ),
              'defaults' => 
              array (
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'service_manager' => 
  array (
    'factories' => 
    array (
      'translator' => 'Zend\\I18n\\Translator\\TranslatorServiceFactory',
      'navigation' => 'Zend\\Navigation\\Service\\DefaultNavigationFactory',
      'navigationadmin' => 'Zend\\Navigation\\Service\\DefaultNavigationFactory',
    ),
  ),
  'translator' => 
  array (
    'locale' => 'en_US',
    'translation_file_patterns' => 
    array (
      0 => 
      array (
        'type' => 'gettext',
        'base_dir' => '/opt/www/funix/mentor/module/Home/config/../language',
        'pattern' => '%s.mo',
      ),
    ),
  ),
  'view_manager' => 
  array (
    'template_path_stack' => 
    array (
      0 => '/opt/www/funix/mentor/module/Home/config/../view',
      1 => '/opt/www/funix/mentor/module/User/config/../view',
      2 => '/opt/www/funix/mentor/module/Authorize/config/../view',
      'system' => '/opt/www/funix/mentor/module/System/config/../view',
      'address' => '/opt/www/funix/mentor/module/Address/config/../view',
      'website' => '/opt/www/funix/mentor/module/Website/config/../view',
      'document' => '/opt/www/funix/mentor/module/Expert/config/../view',
      3 => '/opt/www/funix/mentor/module/Admin/config/../view',
    ),
    'template_map' => 
    array (
      'empty' => '/opt/www/funix/mentor/module/Home/config/../view/layout/emptylayout.phtml',
      'site/layout' => '/opt/www/funix/mentor/module/Home/config/../view/layout/layout.phtml',
      'error/index' => '/opt/www/funix/mentor/module/Home/config/../view/error/index.phtml',
      'error/403' => '/opt/www/funix/mentor/module/Home/config/../view/error/403.phtml',
      'error/404' => '/opt/www/funix/mentor/module/Home/config/../view/error/404.phtml',
      'partial/formInput' => '/opt/www/funix/mentor/module/Home/config/../view/home/partial/formInput.phtml',
      'partial/formFilter' => '/opt/www/funix/mentor/module/Home/config/../view/home/partial/formFilter.phtml',
      'partial/dataGrid' => '/opt/www/funix/mentor/module/Home/config/../view/home/partial/dataGrid.phtml',
      'partial/moduleMenu' => '/opt/www/funix/mentor/module/Home/config/../view/home/partial/moduleMenu.phtml',
      'partial/paginatorItem' => '/opt/www/funix/mentor/module/Home/config/../view/home/partial/paginatorItem.phtml',
      'partial/loliFilter' => '/opt/www/funix/mentor/module/Home/config/../view/home/partial/loliFilter.phtml',
      'partial/my-form-input' => '/opt/www/funix/mentor/module/Home/config/../view/home/partial/my-form-input.phtml',
      'partial/dropdown' => '/opt/www/funix/mentor/module/System/config/../view/system/partial/dropdown.phtml',
    ),
    'exception_template' => 'error/index',
    'not_found_template' => 'error/404',
    'doctype' => 'HTML5',
    'strategies' => 
    array (
      0 => 'ViewJsonStrategy',
    ),
    'display_not_found_reason' => true,
    'display_exceptions' => true,
  ),
  'strategies' => 
  array (
    0 => 'ViewJsonStrategy',
  ),
  'navigation' => 
  array (
    'user' => 
    array (
      0 => 
      array (
        'label' => 'Profile',
        'ico' => 'fa fa-user',
        'route' => 'profile',
        'controller' => 'profile',
        'action' => 'index',
        'resource' => 'user:profile',
        'privilege' => 'index',
      ),
      1 => 
      array (
        'label' => 'Đổi mật khẩu',
        'ico' => 'fa fa-tasks',
        'route' => 'profile/changepassword',
        'controller' => 'profile',
        'action' => 'changepassword',
        'resource' => 'user:profile',
        'privilege' => 'index',
      ),
    ),
    'system' => 
    array (
      0 => 
      array (
        'label' => 'Danh sách user',
        'ico' => 'fa fa-users',
        'route' => 'system/default',
        'params' => 
        array (
          'controller' => 'user',
          'action' => 'index',
        ),
        'resource' => 'system:user',
        'privilege' => 'index',
      ),
      1 => 
      array (
        'label' => 'Thêm user',
        'ico' => 'fa fa-plus',
        'route' => 'system/default',
        'params' => 
        array (
          'controller' => 'user',
          'action' => 'add',
        ),
        'resource' => 'system:user',
        'privilege' => 'add',
      ),
      2 => 
      array (
        'label' => 'Phân quyền',
        'ico' => 'fa fa-sitemap',
        'route' => 'system/default',
        'params' => 
        array (
          'controller' => 'feature',
          'action' => 'mca',
        ),
        'resource' => 'system:feature',
        'privilege' => 'mca',
        'pages' => 
        array (
          0 => 
          array (
            'label' => 'Hệ thống MCA',
            'ico' => 'fa fa-sitemap',
            'route' => 'system/default',
            'params' => 
            array (
              'controller' => 'feature',
              'action' => 'mca',
            ),
            'resource' => 'system:feature',
            'privilege' => 'mca',
          ),
          1 => 
          array (
            'label' => 'Company Features',
            'ico' => 'fa fa-building',
            'route' => 'system/default',
            'params' => 
            array (
              'controller' => 'feature',
              'action' => 'company',
            ),
            'resource' => 'system:feature',
            'privilege' => 'company',
          ),
          2 => 
          array (
            'label' => 'Chức danh hệ thống',
            'ico' => 'fa fa-book',
            'route' => 'system/default',
            'params' => 
            array (
              'controller' => 'role',
              'action' => 'index',
            ),
            'resource' => 'system:role',
            'privilege' => 'index',
          ),
          3 => 
          array (
            'label' => 'Role Features',
            'ico' => 'fa fa-users',
            'route' => 'system/default',
            'params' => 
            array (
              'controller' => 'feature',
              'action' => 'role',
            ),
            'resource' => 'system:feature',
            'privilege' => 'role',
          ),
        ),
      ),
    ),
    'default' => 
    array (
      0 => 
      array (
        'label' => 'Người dùng',
        'route' => 'user',
        'resource' => 'user:index',
        'privilege' => 'index',
      ),
      1 => 
      array (
        'label' => 'Môn học',
        'route' => 'subject',
        'resource' => 'subject:index',
        'privilege' => 'index',
      ),
    ),
  ),
  'module_layouts' => 
  array (
    'Subject' => 
    array (
      'default' => 'layout/layout',
    ),
    'Admin' => 
    array (
      'default' => 'admin/layout/layout',
    ),
    'Expert' => 
    array (
      'default' => 'layout/layout',
    ),
  ),
  'db' => 
  array (
    'driver' => 'Pdo_Mysql',
    'driver_options' => 
    array (
      1002 => 'SET NAMES \'UTF8\'',
    ),
    'dsn' => 'mysql:dbname=mentor;host=125.212.193.1',
    'username' => 'mentor',
    'password' => 'yjExCpYyP5DR2xfz',
    'profilerEnabled' => true,
    'profilerIps' => '125.212.193.1',
  ),
  'locale' => 
  array (
    'default' => 'vi_VN',
    'supported' => 
    array (
      0 => 'vi_VN',
      1 => 'en_US',
    ),
  ),
  'app' => 
  array (
    'session.tableName' => 'sessions',
  ),
  'session' => 
  array (
    'name' => 'erp4w6eytgdvsaddfbdvsdda',
    'remember_me_seconds' => 86400,
    'use_cookies' => true,
    'cookie_httponly' => true,
    'cookie_lifetime' => 86400,
    'gc_maxlifetime' => 86400,
    'save_path' => './data/session',
  ),
  'smtpOptions' => 
  array (
    'name' => 'no-reply',
    'host' => 'smtp.gmail.com',
    'port' => 587,
    'connection_class' => 'login',
    'connection_config' => 
    array (
      'username' => 'no-reply@nhanh.vn',
      'password' => '0M1s-zQ3uakA',
      'ssl' => 'tls',
    ),
  ),
  'captcha' => 
  array (
    'reCAPTCHA' => 
    array (
      'domainName' => 'hotels.local',
      'publicKey' => '6LeKwMQSAAAAAOnwp1Tl7Z5J2ixvYPiNLBIPdZvu',
      'privateKey' => '6LeKwMQSAAAAAJSxtj5329MM-wL5ae-hfkR9jzAT',
    ),
  ),
);