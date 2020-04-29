<?php
use Ubiquity\controllers\Router;

\Ubiquity\cache\CacheManager::startProd($config);
\Ubiquity\orm\DAO::start();
Router::start();
Router::addRoute("_default", "controllers\\IndexController");
\Ubiquity\assets\AssetsManager::start($config);
//Router::addRoute("_default", "controllers\\IndexController");
/**
 *
 * @get("_default","name"=>"Home")
 */
public function index() {
    $menu=$this->getMenu('Home');
    $messages=$this->dataProvider->getMessages();
    $content=nl2br($this->dataProvider->getPageContent('Home'));
    $this->loadView('MainController/index.html',compact('messages','content') + $menu);
}
{% extends "main/vBase.html" %}
{%block body%}
{% for message in messages %}
<div class="ui icon {{message.type}} message">
<i class="{{message.icon}} icon"></i>
<div class="content">
<div class="header">
{{message.title}}
</div>
<p>{{message.content}}</p>
</div>
</div>
{% endfor %}
<div class="ui segment">
{{content | raw}}
</div>
{%endblock%}