# Issue creating a type specifing extension for PHPStan

Attempted to follow documentation for creating type specifing extension from README.md on PHPStan. 


## Problem
Problem with following docs. See attempt `phpstan/AssertNotNullExtension.php`


To recreate problem run phpstan with problem config:

```
vendor/bin/phpstan analyse -c phpstan-error.neon 
```


Error is:

```
 ------ -------------------------------------------------------------------------------------------------------------------------------------------------- 
  Line   Assert.php                                                                                                                                        
 ------ -------------------------------------------------------------------------------------------------------------------------------------------------- 
         Internal error: Argument 1 passed to PHPStan\Analyser\MutatingScope::getType() must be an instance of PhpParser\Node\Expr, null given, called in  
         /home/vagrant/phpstan-static-method-type-specifier/phpstan/AssertNotNullExtension.php on line 47                                                  
         Run PHPStan with --debug option and post the stack trace to:                                                                                      
         https://github.com/phpstan/phpstan/issues/new                                                                                                     
 ------ -------------------------------------------------------------------------------------------------------------------------------------------------- 

```

## Solution

Seems writing code as here `phpstan/AssertNotNull2Extension.php` works.


