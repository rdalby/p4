# Project 4
+ By: Rachel Dalby
+ Production URL: <http://p4.dwarachel.me>


## Feature summary
+ Users can login/register
+ Give option to search by a mood playlist or just by mood
+ Users can create/delete playlists for their moods
+ Users can create media


  
## Database summary

+ My application has 7 tables in total (`users`, `media`, `playlists`, `media_playlist`, `types`,`moods`,`authors`)
+ There's a many-to-many relationship between `media` and `playlists`
  + with a pivot table `media_playlist` between them
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

Css template
+ [W3 School](https://www.w3schools.com/code/tryit.asp?filename=G42D7Z22Q48G)

## inputs

1. Login for users
2. Search playlists
3. Create media
4. Create playlist

## Packages
+  barryvdh/laravel-debugbar

## Code style divergences
I prefer to ues tab instead of spaces, it is what I am most comfortable with and can make sure is consistent.


## Notes for instructor
I am not sure if github will pull down correctly as I was having difficulties with it. It lost it's ref/head and took a good deal of effort to get it back on track.

