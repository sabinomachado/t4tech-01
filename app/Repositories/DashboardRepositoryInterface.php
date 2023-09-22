<?php

//criar uma interface para o repository
namespace App\Repositories;

interface DashboardRepositoryInterface
{
    public function getCategorys();
    public function getNews();
}