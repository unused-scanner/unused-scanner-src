<?php
use UnusedScanner\Lib\Config;

class Foo
{
    /**
     * @param \UnusedScanner\Lib\DependencyMapper $z
    **/
    public function bar($z)
    {
        $a = DeepCopy\Filter\Filter::class;
        $b='phpDocumentor\Reflection\File '.'\Webmozart\Assert\Tests\AssertTest';
        $c=implode(',', ['dummy']).Webmozart\Assert\Assert::string('sss');
        $d = (Prophecy\Exception\Exception::class).'foo';
        return [
            'a'=>Config::class,
            'b'=> UnusedScanner\Lib\ComposerReader::class,
            'c'=> 'Symfony\Component\Finder\Exception\AccessDeniedException',
            'd'=> 'Symfony\\Component\\Finder\\Finder',
            'e'=> Text_Template::class,
            'f'=> ['\PHPUnit\Runner\PhptTestCase', 'PHP_Token_AMPERSAND'],
            'g'=>['\Exception',Composer\Autoload\ClassLoader::class],
            'h'=>'\\SebastianBergmann\\ObjectReflector\\TestFixture\\ParentClass',
            'i'=>PHPUnit\Util\Filesystem::class
        ];
        
    }
}
