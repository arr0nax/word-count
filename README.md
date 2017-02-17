# Word Counter

#### An application to count the repetition of words in a sentence, February 2017

#### By **Clayton Collins**

## Description

This program accepts a sentence and a word, then returns the amount of times that the word occurs in the sentence. It does this by breaking the sentence in to an array by spaces, then iterating through and checking each word to see if it matches the inputed word.  

## Setup/Installation Requirements

* _Clone this repository_
* _In terminal, navigate to the project directory and run "composer install"_
* _Navigate to the 'web' folder and begin a PHP server (run 'php -S localhost:8000)_
* _open 'localhost:8000' in your web browser_
* _Enter a sentence and a word!_

## Known Bugs

 Because of how it is set up, this application WILL NOT recognize words that are spelled the same but are separated by different punctuation. I could not think of an efficient way to handle this without using REGEX.

## Support and contact details

Let me know if you run into any issues or have questions, ideas or concerns. Contact me or make a pull request.

## Technologies Used

Uses PHP, Silex, Twig, PHPunit, HTML, Bootstrap, and CSS.


Copyright (c) 2017 **Clayton Collins**
