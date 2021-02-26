{% extends "/front/layout.twig" %}
{% block head %}

{% endblock %}
{% block content %}
<div id="blog">
    <div class="container">
        <h1><b>{{ article.name }}</b></h1>
        <br>
        <div id="art">


            <img src="{{ article.image }}">

            {{ article.text }}
        </div>
    </div>
</div>
{% endblock %}

