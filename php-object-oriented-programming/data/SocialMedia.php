<?php

class SocialMedia
{
    final function login(string $username, string $password): void
    {
    }
}

final class Facebook extends SocialMedia
{
    // // akan error
    // public function login(string $username, string $password): void
    // {
    // }
}

// ini akan error
// class FacebookStory extends Facebook
// {
// }
