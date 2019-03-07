<form action="{{action('ContactController@store')}}" method="post" role="form" class="">
    <div class="form-group">
        <input type="text" name="name" class="form-control" id="name" placeholder="Ваше имя"
                data-rule="minlen:4" data-msg="Please enter at least 4 chars"/>
        <!-- <div class="validation"></div> -->
    </div>
    <div class="form-group">
        <input type="email" class="form-control" name="email" id="email"
                placeholder="Ваш адрес электронной почты" data-rule="email"
                data-msg="Please enter a valid email"/>
        <!-- <div class="validation"></div> -->
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="subject" id="subject" placeholder="Тема"
                data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject"/>
        <!-- <div class="validation"></div> -->
    </div>
    <div class="form-group">
        <textarea class="form-control" name="message" rows="5" data-rule="required"
                    data-msg="Please write something for us" placeholder="Сообщение"></textarea>
        <!-- <div class="validation"></div> -->
    </div>
    <div class="text-center">
        <button type="submit">Отправить сообщение</button>
    </div>
</form>