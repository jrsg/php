use PHPUnit\Framework\TestCase;

class SyntaxTest extends TestCase
{
    
    public function setUp()
    {
        
    }
    public function testSyntaxError()
    {        
        $this->assertTrue( php_check_syntax($_SERVER['PHP_SELF']) );
    }    
}
