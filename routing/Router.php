<?php 
namespace Routing;

class Router
{
    /** @var Route[] */
    private $routes;

    public function register(Route $route)
    {
        $this->routes[] = $route;
    }

    public function handleRequest(string $request)
    {
        $matches = [];
      
        foreach ($this->routes as $route) {
            
            if (preg_match($route->path, $request, $matches)) {
                
                // $matches[0] will always be equal to $request, so we just shift it off
                array_shift($matches);
                // here comes the magic
                $class = new \ReflectionClass('App\\Http\\'.$route->controller);
                $method = $class->getMethod($route->method);
                // we instantiate a new class using the elements of the $matches array
                $instance = $class->newInstance(...$matches);
                // equivalent:
                // $instance = $class->newInstanceArgs($matches);
                // then we call the method on the newly instantiated object
                $method->invoke($instance);
                // finally, we return from the function, because we do not want the request to be handled more than once
                return;
            }
        }
        
    }
}