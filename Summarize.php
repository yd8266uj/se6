<?php

/**
 * Created by PhpStorm.
 * User: robo
 * Date: 10/2/16
 * Time: 8:55 PM
 */
class Summarize {

    private  $num_cat_query ;
    private $num_books_query;
    private $books_cost_query;
    private $book_average_query;

    public function __construct(){
        $this->num_cat_query = 'select count(*) from categories';
        $this->num_books_query = 'select count(*) from books';
        $this->books_cost_query ='select sum(price) from books';
        $this->book_average_query = 'select avg(price) from books';

    }
    
    public function close_db($connection){
        mysqli_close($connection);
    }

    public function getNumCategories(){
        if($connect = db_connect()){
            $result = $connect -> query($this->num_cat_query);
            $num_cat = $result->fetch_assoc();
            $this->close_db($connect);
            foreach($num_cat as $item => $value){
                return $value;
            }

        }else{
            return false;
        }
    }

    public function getNumBooks(){
        if($connect = db_connect()){
            $result = $connect -> query($this->num_books_query);
            $num_books = $result->fetch_assoc();
            $this->close_db($connect);
            foreach($num_books as $item => $value){
                return $value;
            }
        }else{
            return false;
        }
    }

    public function getTotalBookCost(){
        if($connect = db_connect()){
            $result = $connect -> query($this->books_cost_query);
            $tot_cost = $result -> fetch_assoc();
            $this->close_db($connect);
            foreach($tot_cost as $item => $value){
                return $value;
            }
        }else{
            return false;
        }
    }

    public function getAvgBookCost(){
        if($connect = db_connect()){
            $result = $connect -> query($this->book_average_query);
            $avg_cost = $result -> fetch_assoc();
            $this->close_db($connect);
            foreach($avg_cost as $item => $value){
                return $value;
            }

        }else{
            return false;
        }
    }
}
