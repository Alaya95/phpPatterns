<?php

/*
   1. Найти и указать в проекте Front Controller и расписать классы, которые с ним взаимодействуют.

        Front Controller - это файл расположенный по пути app/Kernel.
        Классы взаимодействующие с Front   Controller(app/Kernel):

         Классы, которые вызываются непосредственно в самом классе Kernel
            Framework\Registry;
            Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
            Symfony\Component\DependencyInjection\ContainerBuilder;
            Symfony\Component\Config\FileLocator;
            Symfony\Component\HttpKernel\Controller\ControllerResolver;
            Symfony\Component\HttpKernel\Controller\ArgumentResolver;
            Symfony\Component\HttpFoundation\Request;
            Symfony\Component\HttpFoundation\Response;
            Symfony\Component\HttpFoundation\Session\Session;
            Symfony\Component\Routing\Exception\ResourceNotFoundException;
            Symfony\Component\Routing\Matcher\UrlMatcher;
            Symfony\Component\Routing\RequestContext;
            Symfony\Component\Routing\RouteCollection;

        Классы, которые вызываются при вызове Registry  из класса Kernel
            Symfony\Component\DependencyInjection\ContainerBuilder;
            Symfony\Component\Routing\Generator\UrlGenerator;
            Symfony\Component\Routing\RequestContext;
            Symfony\Component\Routing\RouteCollection;


 * 2. Найти в проекте паттерн Registry и объяснить, почему он был применён.
        Registry - предоставляет доступ к коллекции объектов из любой точки программы.
        Основная задача Реестра - это поиск какого-либо объекта.
        В данном Реестре создается контейнер, затем получается данные из конфигурационного файла и затем вызывается функция рендера.

 * 3. Добавить во все классы Repository использование паттерна Identity Map вместо постоянного генерирования сущностей.

 */