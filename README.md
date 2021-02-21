# Taloma Hearsay

<img src="https://media.giphy.com/media/3o6Zt6vTTW6xxlzolO/giphy.gif" width="75%">

## :shipit: About

This is an individual school assignment in PHP where the purpose was to create a news feed with fake news articles. I decided to put my own spin on it and make fun of my own small town upbringing. I decided to go with a made up town name, with made up citizens and write fictional stories based off of true small town gossip culture (as I recall it).
:pencil2: PS. All illustrations are made by me as well.

<details><summary><b>:books:  Required criterias:</b></summary>
The news feed will consist solely of a list of news feed items created by different authors. In total you should have 5 different authors all with at least 2 different news feed items each. The news feed item contents does not have to be logical data so you can use something like lorem ipsum to add some content.

**The news feed items should contain:**

- Title
- Content
- Author
- Published date
- Like counter _(the number of fake likes a news item has received)_

**The news feed author items should contain the following data:**

- ID
- Full name

Both the authors and the news feed items should be stored in arrays in a structure that's simple to use in your code and that's easily understandable. The authors and news feed items don't have to be within the same array but some sort of connection should exist between a news feed item and it's author. The news feed items **should** be ordered based on the published date, so the latest news feed item should go on top and vice versa.

**The project should use the following functionality:**

- Variables
- Multiple data types
- Arrays
- Functions
- Loops (for, while or foreach)
- Output (echo, print etc.)

- The project should be written in HTML, CSS and PHP.
- The project should declare strict types in files containing only PHP code.
- The project should implement an accessible graphical user interface.
- The project should not include any coding errors, warning or notices.
- The project must be tested on at least two of your classmates computers. Add the testers name to the `README.md` file.
- The repository should have at least 10 commits and **not just one big commit**.
- The repository must contain a `README.md` file with installation instructions and documentation.
- The repository must contain a `LICENSE` file.
- The repository must contain a `.editorconfig` file with your preferred settings.
</details>

## :octocat: Instructions

_ATTN: A prerequisite - In order to do this you will need to have PHP installed on your computer._

1. Clone or fork this repository to your computer.
2. Open up your terminal and `cd` into the project folder.
3. Create a local server by using the following command: `php -S localhost:1337`
4. Open in your browser, write the name of your localhost in the url followed by `/index.php` and access the project from there.

## :computer: Testers

- [Carolina Hagman](https://github.com/carolinahagman/)
- [Evelyn Fredin](https://github.com/evelynfredin)

## :mag: Code Review

By [Simon Lindstedt](https://github.com/simonlindstedt)

- [x] `header.php:7` seems to link to a css file that do not exist.
- [x] Add an alt-tag to all images
- [x] I can’t see the dots to the left of the titles, the seem to have visibility: hidden att all times? If these are not to be included I would remove them entirely.
- [ ]`media.css:9 60` Since the dots are no longer present as far as I can tell, I would remove the class from the css entirely.
- [ ] Nice general responsiveness for different sizes! I would include a max size as well, to prevent everything from spreading out too much.
- [ ] `styles.css:26` Regarding point 4, maybe lock the size of the content at around 1300 px width, and use one set of the drawn line instead of the dashed one? Alternatively (development idea), a script/function that autogenerates the dashed lines based on the window width!
- [ ] `index.php:25` I would suggest setting the css dynamically with either some sort of function or javascript instead. To make it more easy to configure later on!

> Otherwise great job, the code is easy to read and I’m a big fan of the general look!


## :man_technologist: Creator

[Dante Mogrim](https://github.com/mogrim-91)

## :fleur_de_lis: License

[MIT](https://en.wikipedia.org/wiki/MIT_License)
