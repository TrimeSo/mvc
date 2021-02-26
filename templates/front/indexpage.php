{% extends "/front/layout.twig" %}
{% block head %}
<div id="headerwrap">
    <div class="container">
        <div class="row centered">
            <div class="col-lg-8 col-lg-offset-2">
                <h1>Добро пожаловать в уголок путешественника!</h1>
                <h2>Пушешествуйте не выходя из дома</h2>
            </div>
        </div>
    </div>
</div>
{% endblock %}
{% block content %}



<div class="container w">
        <div class="row centered">
            <br><br>
            <div class="col-lg-4">
                <i class="fa fa-globe" aria-hidden="true"></i>
                <h4>Мир</h4>
                <p>Узнавайте много нового о многочисленных достопримечательностей и красот разных стран мира.</p>
            </div>
            <div class="col-lg-4">
                <i class="fa fa-plane" aria-hidden="true"></i>
                <h4>Путишествия</h4>
                <p>Путешествуйте по всем странам мира, не выходя из дома.</p>
            </div>
            <div class="col-lg-4">
                <i class="fa fa-clock-o" aria-hidden="true"></i>
                <h4>Польза</h4>
                <p>Проводите время с пользой, узнавая получше нашу любимую планету Земля.</p>
            </div>
        </div>
        <br><br>
    </div>
    
    <div id="dg">
        <div class="container">
            <div class="row centered">
                <div class="col-lg-4">
                    <h4>Time to travel</h4>
                </div>
              <div class="col-lg-4">
                  <div class="tilt">
                      <a href="#"><img src="../../images/hello_html_m13eca3a3.png" alt=""></a>
                  </div>
              </div>
              <div class="col-lg-4">
                    <h4>Time to travel</h4>
                </div>
            </div>
        </div>
    </div>

    <div id="lastnews">
        <div class="container">
            <h3>Последние статьи</h3>
            <div class="row centered">
                <div class="col-lg-4">
                    <a href="/article/1"><img src="../../images/52b20f3ff99516428b9df9468f68d806--grand-canyon-arizona-grand-canyon-national-park.jpg" alt=""></a>
                    <h4>Интересные факты о Гранд Каньон</h4>
                </div>
                    <div class="col-lg-4">
                        <a href="/article/2"><img src="../../images/8295df855689a6747b8853e8e9ee0a26.jpg" alt=""></a>
                        <h4>Одно чудо на 2 страны - Ниагарский водопад</h4>
                    </div>
                <div class="col-lg-4">
                    <a href="/article/3"><img src="../../images/7b1f791c8c3782582d8e0ed60b00f89c.jpg" alt=""></a>
                    <h4>История возникновения Тадж-Махала</h4>
                    </div>
                </div>
            </div>
        </div>

{% endblock %}

