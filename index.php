<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>

    <header class="header">
        <div class="container">
            <div class="header__title">PLUS<span class="header__title--bold">БОНУС</span></div>
            <div class="header__subtitle">купил - бонус получил</div>
            <div class="header__place"></div>
        </div>
        <!-- /.container -->
    </header>
    <!-- /.header -->

    <main class="main">
        <div class="container">

        <?php 

            if($_COOKIE['user'] == ''): ?>
            
            <div class="wrap-wrap">
                <div class="btn-wrap reg-btn">
                    <button type="button" class="btn" data-toggle="modal">
                        Авторизация
                    </button>
                </div>
            </div>

        <?php else: ?>

            <form action="reg.php" method="post">

                <div class="logModal-input-wrap">
                    <div class="logModal-row">
                        <div class="logModal-row__text form-text">промокод:</div>
                        <input type="text" name="phone" placeholder="промокод" size="25" />
                    </div>
                </div>

                <hr>
                
                <input type="submit" value="Ввести">
            </form>

        <?php endif; ?>            

            <form action="reg.php" method="post" class="reg-modal hide">

                <div class="logModal-input-wrap">
                    <div class="logModal-row">
                        <div class="logModal-row__text form-text">телефон:</div>
                        <input type="text" name="phone" placeholder="ваш телефон" size="25" />
                    </div>
                </div>

                <hr>

                <div class="logModal-input-wrap">
                    <div class="logModal-row">
                        <div class="logModal-row__text form-text">email:</div>
                        <input type="text" name="email" placeholder="ваш email" size="25" />
                    </div>
                </div>
            
                <hr>

                <div class="logModal-input-wrap sms-code__form">
                    <div class="logModal-row">
                        <div class="logModal-row__text form-text">код смс:</div>
                        <input type="text" name="scode" placeholder="5-ти значный код" size="25" />
                    </div>
                </div>

                <hr>

                <input type="checkbox">
                <span class="chechbox-text">согласие на обработку данных</span> <br> <br>
                <div class="come-in__wrap hide">
                    <input type="submit" value="Войти" class="come-in__btn">
                </div>
                <div class="confirm-phone__btn">Выслать код подтверждения</div>

            </form>

            <!-- start bonus-code form -->
            <form action="reg.php" method="post" class="hide">

                <div class="logModal-input-wrap">
                    <div class="logModal-row">
                        <div class="logModal-row__text form-text">промокод:</div>
                        <input type="text" name="phone" placeholder="промокод" size="25" />
                    </div>
                </div>

                <hr>
                
                <input type="submit" value="Ввести">
            </form>
            <!-- end bonus-code form -->

        </div>
        <!-- /.container -->
    </main>
    <!-- /.main -->

    <div class="container">
        <main class="main">

            <!-- Button trigger modal -->
            <!-- <div class="wrap-wrap">
                <div class="btn-wrap">
                    <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal">
                        Активировать бонус
                    </button>
                </div>
            </div> -->

            

            <!-- reg Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Авторизация</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                        <form action="reg.php" method="post">

                            <div class="logModal-input-wrap">
                                <div class="logModal-row">
                                    <div class="logModal-row__text form-text">телефон:</div>
                                    <input type="text" name="phone" placeholder="ваш телефон" size="25" />
                                </div>
                            </div>

                            <hr>

                            <div class="logModal-input-wrap">
                                <div class="logModal-row">
                                    <div class="logModal-row__text form-text">email:</div>
                                    <input type="text" name="email" placeholder="ваш email" size="25" />
                                </div>
                            </div>
                        
                            <hr>

                            <div class="logModal-input-wrap sms-code__form hide">
                                <div class="logModal-row">
                                    <div class="logModal-row__text form-text">код смс:</div>
                                    <input type="text" name="scode" placeholder="5-ти значный код" size="25" />
                                </div>
                            </div>

                            <hr>

                            <input type="checkbox" name="permission" value="yes">
                            <span class="chechbox-text">согласие на обработку данных</span>
                            <input type="submit" value="Войти">
                        </form>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                            <button type="button" class="btn btn-primary save">Далее</button>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end Modal -->

            <!-- bonus code Modal-->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">ввод кода</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                        <form action="reg.php" method="post">

                            <div class="logModal-input-wrap">
                                <div class="logModal-row">
                                    <div class="logModal-row__text form-text">промокод:</div>
                                    <input type="text" name="phone" placeholder="ваш телефон" size="25" />
                                </div>
                            </div>

                            <hr>

                            <input type="submit" value="Войти">
                        </form>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                            <button type="button" class="btn btn-primary save">Далее</button>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end bonus code Modal-->

        </main>

        <footer class="footer">

        </footer>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>

</body>

</html>