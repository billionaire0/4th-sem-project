<?php
interface Cleaning
{
    public function signUp(LoginDao $login);
    public function getCredential(LoginDao $login);
    public function saveBooking(bookingDao $book);
    // public function saveUserDetails(UserDao $user);
    // public function addProducts(ProductDao $productDao);
    // public function updateProduct(ProductDao $productDao);
}
