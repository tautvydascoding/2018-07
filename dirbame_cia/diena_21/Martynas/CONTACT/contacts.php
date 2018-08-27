
<?php

require_once("header.php")




?>


        <div class="cont_wraper">
            <!-- WRAPER-->

            <div class="mdl-grid cont_us">
                <h1 id="cont_head1">LETS TALK,</h1>
                <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni assumenda harum minima commodi, voluptatum
                    repellat quae perspiciatis delectus a labore!
                </P>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio quia ratione commodi nisi nobis perspiciatis
                    dolor nihil saepe? Repudiandae quisquam blanditiis odio ratione quaerat iure repellendus explicabo incidunt
                    neque modi enim, aspernatur natus facere. Nam quod totam perferendis placeat fugit.</p>

            </div>


                    <div id="issiusta"><?php 
                                        if (isset($_GET['mailSent'])) {
                                            echo "<h5 class='msg-isvedimas'> Jusu zinute buvo Issiusta! :) </h5>";
                                        }
                                        ?></div>

            <section class="mdl-grid">
                <div class="mdl-cell mdl-cell--12-col aukstis-450">
                    <form action="senMail.php" class="cont_form" method="POST" name='manoForma' onsubmit="return validateForm()" id='main-forma'>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="sample3" name="vardas"min="3" autofocus>
                            <label class="mdl-textfield__label labelc_balt" for="sample3">Vardas...</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="sample3" name="pavarde" min="4">
                            <label class="mdl-textfield__label labelc_balt" for="sample3">Pavarde...</label>
                        </div>

                        <div class="mdl-textfield mdl-js-textfield">
                            <input class="mdl-textfield__input" type="email" id="sample1" name="el_pastas">
                            <label class="mdl-textfield__label labelc_balt" for="sample1">Elektroninis pastas...</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield">
                            <input class="mdl-textfield__input labelc_balt" type="number" id="sample1" name="tel">
                            <label class="mdl-textfield__label labelc_balt" for="sample1">Jusu tel. nr...</label>
                        </div>

                        <div class="mdl-textfield mdl-js-textfield">
                            <textarea class="mdl-textfield__input" type="text" rows="3" id="sample5" maxlength="250" name="zinute"></textarea>
                            <label class="mdl-textfield__label labelc_balt" for="sample5">Parasykite mums ...</label>
                        </div>
                        <div class="cont_btn">
                            <button class="mdl-button mdl-js-button mdl-button--accent mdl-js-ripple-effect" type="submit">
                                Išsiųsti
                            </button>
                            <h4 class="mobh4">Let's talk! Write us a letter, and we will contact You in couple of days! <br> <br>HQ <br>
                            <p>1430 Grozio gatve, apartamentai 200 Kaunas. Pasto kodas 49889.
                    <br> Tel:.370 667889. El. pastas: undo@studija.lt </p>
                                
                            </h4>
                        </div>
                    </form>

            </section>


            <article class="mdl-cell mdl-cell--6-col cont_hq aukstis-150">
                <h1>HQ</h1>
                <p>1430 Grozio gatve, apartamentai 200 Kaunas. Pasto kodas 49889.
                    <br> Tel:.370 667889. El. pastas: undo@studija.lt
                    <a href="https://goo.gl/maps/Vjxyb2YaBJR2" target="_blank">
                        <br>
                        <strong>MAP it </strong>
                    </a>
                </p>
                <div class="mdl-card naujienlaiskis">
                    <div class="mdl-card__title">
                        <strong>Musu naujienlaiskis</strong>
                    </div>
                    <div class="mdl-card__media">
                    <input class="mdl-textfield__input nauj_input" type="email" name="nauj_pastas" placeholder="Jusu el. pastas naujienlaiskiui...">
                    </div>
                    <div class="mdl-card__supporting-text">
                        Ar norite gauti musu naujienlaiski?
                    </div>
                    <div class="mdl-card__actions">
                       <a href="naujienlaiskis.php"><button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored naujien_btn">
                            <p>Taaip!</p>
                        </button> </a> 
                    </div>
                </div>
            </article>




            </div>
            <!-- wraperio pabaiga-->


<?php

require_once("footer.php")




?>


