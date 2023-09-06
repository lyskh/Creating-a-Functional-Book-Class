<?php

//Class Name : book
class Book {
	private string $title;
	private string $author;
	private int $pages;

	//magic methods
	public function __construct($title, $author, $pages){
		$this->title = $title;
		$this->author = $author;
		$this->pages = $pages;
	}

	//setter
	public function setTitle($title) {
		$this->title = $title;
	}

	public function getTitle() {
		return $this->title;
	}

	public function setAuthor($title) {
		$this->author = $author;
	}

	public function getAuthor() {
		return $this->author;
	}

	public function setPages($title) {
		$this->pages = $pages;
	}

	public function getPages() {
		return $this->pages;
	}

	public function describe() {
		return $this->title . " by " . $this->author . " has " . $this->pages . " pages.";
	}
}

//HTML page
$Book = new Book("Harry Potter", "JK Rowling", 400);//blueprint
echo $Book->describe();

?>