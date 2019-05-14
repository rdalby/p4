# Project 4
+ By: Rachel Dalby
+ Production URL: <http://p4.dwarachel.me>


## Feature summary
*Outline a summary of features that your application has. The following details are from a hypothetical project called "Movie Tracker". Note that it is similar to Foobooks, yet it has its own unique features. Delete this example and replace with your own feature summary*

+ Users can login/register
+ Give option to search by a mood playlist or just by mood and media type
+ Users can create/update/delete playlists for their moods
+ Users have account management profile to update their information


  
## Database summary

+ My application has 7 tables in total (`users`, `media`, `playlists`, `playlist__media`, `types`,`moods`,`authors`)
+ There's a many-to-many relationship between `media` and `playlists`
  + with a pivot table `playlist__media` between them
+ There's a one-to-many relationship between the following tables
  + `media` and `authors`
  + `media` and `types`
  + `media` and `moods`
  + `playlists` and `moods`
  + `playlists` and `users`

## Outside resources
Comics
+ [Comics Kingdom](http://comicskingdom.com/)
+ [Zits Comics](http://zitscomics.com/)
+ [Fluent U](https://www.fluentu.com/blog/english/learning-english-through-comics/)
+ [PHD Comics](http://phdcomics.com/comics/archive.php?comicid=946)

Movies and Books
+ [Amazon](http://www.amazon.com)

Music Videos
+ [Youtube](http://www.youtube.com)

## 3 Unique inputs

1. Login for users
2. Dropdown menu for the users mood
3. Checkboxes to include media

## Packages
+  barryvdh/laravel-debugbar

## Code style divergences
I prefer to ues tab instead of spaces, it is what I am most comfortable with and can make sure is consistent.


## Notes for instructor
I had to add an extra "_" in the playlist__media table due to some seeder issues. It kept looking for a double underscore.

