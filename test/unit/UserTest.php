 <?php 
class UserTest extends \PHPUnit_Framework_TestCase{
	public function testForFirstName(){
		$user = new \App\Models\User;
		$user->setFirstName('Billy');

		$this->assertSame($user->getFirstName(),'Billy');

	}

	public function testForLastName(){
		$user = new \App\Models\User;
		$user->setLastName('stephen');

		$this->assertSame($user->getLastName(),'stephen');

	}
	public function testFullName(){
		$user = new \App\Models\User;
		$user->setFirstName('Billy');
		$user->setLastName('stephen');
		$this->assertSame($user->getFullName(),'Billy stephen');


	}

	public function testFirstAndLastTrimmed(){
		$user = new \App\Models\User;
		$user->setFirstName(' Billy ');
		$user->setLastName(' stephen     ');
		$this->assertSame($user->getFirstName(),'Billy');
		$this->assertSame($user->getLastName(),'stephen');


}

	public function testEmailAddress(){
		$user = new\App\Models\User;
		$user->setEmail('stephenogechi.com');
	$this->assertSame($user->getEmail(),'stephenogechi.com');
	}

	public function testEmailVariablesContainCorrectValue(){
		$user = new\App\Models\User;
		$user->setFirstName('Billy');
		$user->setLastName('stephen');
		$user->setEmail('stephenogechi.com');
		$emailVariables = $user->getEmailVariables();


$this->assertArrayHasKey('full_name',$emailVariables);
$this->assertArrayHasKey('email',$emailVariables);

$this->assertSame($emailVariables['full_name'],'Billy stephen');
$this->assertSame($emailVariables['email'],'stephenogechi.com');





	}


	
}
 