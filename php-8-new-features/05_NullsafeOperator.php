<?php

class Address
{
    public ?string $country;
}

class User
{
    public ?Address $address;
}

function  getCountry(?User $user): ?string
{

    // // kode manual check null
    // if ($user != null) {
    //     if ($user->address != null) {
    //         return $user->address->country;
    //     }
    // }

    return null;

    // kode nullsafe operator
    return $user?->address?->country;
}
