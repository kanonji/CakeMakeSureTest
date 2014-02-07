<?php
App::uses('ClassRegistry', 'Utility');

/**
 * ClassRegisterModel class
 */
class ClassRegisterModel extends CakeTestModel {
	public $useTable = false;
}

/**
 * User model
 */
class User extends ClassRegisterModel {
}

/**
 * Post model
 */
class Post extends ClassRegisterModel {
}

/**
 * ClassRegistry Test Case
 *
 */
class ClassRegistryTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		// Do something
	}

	public function testClassRegistry_init_gives_same_instance(){
		$UserNew  = New User();
		$UserNew2 = New User();
		$this->assertNotSame($UserNew, $UserNew2);

		$User  = ClassRegistry::init('User');
		$User2 = ClassRegistry::init('User');
		$this->assertSame($User, $User2);
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		// Do something
		parent::tearDown();
	}

}
