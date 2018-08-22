<?php

/**
 *  reiklavimai - receptas - kokias f-jas privalo tureti klase, kuri naudoja interface Edit
 */
interface Edit
{
    public function changeName($a);
    public function getName();
    public function isLogin();
}
