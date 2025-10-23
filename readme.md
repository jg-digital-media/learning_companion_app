# Learning Companion App
At its very earliest stages of development. Due for completion in 2026. Check back for updates. 

Last Updated: `22-10-2025 - 17:06`

## Sections

+ [Tasks](#tasks) | [User Flow Notes](#user-flow-notes) | [Development](#development) | [Notes](#notes) | [Learning Goals](#learning-goals-of-this-project) | [License](#license)

[Back to Top](#learning-companion-app)

## Tasks 

+ Tasks `26` Completed `10`

+ `COMPLETED: 23-10-2025 ` - Finish Wireframe - concept for app 
+ `COMPLETED: 16-10-2025` - Add a sample set of quotes for the app and store in JSON `data/daily_quotes/quotes.json`
+ `COMPLETED: 23-10-2025` - Build markup for the app
+ `TODO: ` - Image to go with website title in main header
  + `COMPLETED: 23-10-2025 ` - Handle toggling of `.navigation` element visibility `app.js`
    + `COMPLETED: 23-10-2025 ` - Fade in or slide in?
  + `COMPLETED: 23-10-2025 ` - Build markup for app home screen `index.php`
  + `COMPLETED: 23-10-2025 ` - Build markup for the flashcards `cards.php`
  + `COMPLETED: 23-10-2025 ` - Build markup for the progress tracker `quiz.php`
  + `COMPLETED: 23-10-2025 ` - Build markup for the checklist `checklists.php`     
  + `COMPLETED: 23-10-2025 ` - Build markup for the daily quote `motivation.php`
+ `TODO: ` - Plan Font Stack
+ `TODO: ` - Reset progress tracking on button click
+ `TODO: ` - Quiz/Triva Flashcards. - flip cards to see answer.  - Try for flip animations.
+ `TODO: ` - When ready, get an estimate the size in bytes/megabytes if appropriate it'll take to store progress tracking in `.localStorage`. 
+ `TODO: ` - Finalise footer.php template
+ `TODO: ` - `btn---search` span - transition scale on span element when search button is hovered.
+ `TODO: ` - Experiment with box shadow for header element
+ `TODO: ` - use title and/or alt attributes to display natural tooltips that display full titles- `topic-list-cards.php`
  + `TODO: ` - modify link text - `topic-list-cards.php`
+ `TODO: ` - 404 and search WordPress templates will be needed
+ `TODO: ` - Implement Topic images for progress checklist page. `checklists.php` image sizes `170by170`
+ `TODO: ` - handle toggling of .navigation visilibity `app.js`
+ `TODO: ` - WordPress Sass file - for storing WordPess related selectors.
+ `TODO: ` - correct - quiz feedback - accompany with tick icon
+ `TODO: ` - incorrect - quiz feedback - accompany with cross icon


[Back to Top](#learning-companion-app)


# User Flow Notes

+ Cards will be pre-determined. Users will be able to mark cards as completed and watch the progress bar update as they go. That's the general idea of the app.

[Back to Top](#learning-companion-app)

## Development

+ At the moment I'm at the Wireframe stage of the app. This will be followed by developing the building the HTML/PHP - the markup before prototyping with CSS and JavaScript.

### `17-10-2025`

+ Finished the wireframe and build the markup and styling for the homepage along with configuration variables - which will help me when finalising the final fonts; colours and other things.  I've added template files for each page type in the prototype. Evemtually these will be replaced as PHP Templates.

### `20-10-2025` 

+  I've added a rudimentary navigation menu to one of the page templates that toggles visibility at the click of a button. As it stands, it's functionally there, but the fade effect isn't quite transitioning correctly, where we've got a delay in the child elements fading out.  It's been logged as a visual bug.

### `21-10-2025`

+ Once I got the mobile menu working, there were 2 main things I wanted to concentrate on. First, there are 2 distinct page designs. The homepage, the progress checklist page, which needed some attention and some colour, making sure there was distinct selectors between the 2 designs - meaning one change never overrides another on either page.  

+ By the end of the day, I got as far as recreating the UI as far as the wireframe goes, with the hamburger menu and search bar side by side. Which was ably placed using Flexbox.  It feels like I got a lot sorted out and barely anything sorted out at the same time.  The question is, do I carry on with the same approach for the rest of the UI or meticulously sort out the CSS before moving on?

+ I think I'll build the rest of the markup as that will help me make better decisions about selectors in my CSS. 

### `22-10-2025`

+ The pace of development is concerning me at the moment. I've spent the whole day working on the flashcards page and got as far as staging the basics of the UI and its responsiveness. I managed to get to a stage of this that I was happy with. It's concerning because I want to focus on other projects too and would like to finish the UI soon. The sooner this is done, the better. 

+ But I do still think I should carry on the approach I decided on yesterday and keep building the markup. Then start reviewing my task list for this project. I'll hope to finish the markup/interface building by the end of tomorrow.

### `23-10-2025`

+ I've made some improvements to the visual style off the app.  I'm now somewhere between feeling like i've taken the UI and UX as far as I can and feeling under the pressure that i've put on myself to get ready to get going on the next stage of the app. 

homepage more or less done but there's still some font stack decisions to be made there.

When I say "build the markup" and say it's completed, I'm referring to the initial time building the interface markup

[Back to Top](#learning-companion-app)

## Notes 

  + Change Background / Fonts

    + Inline styling via JS: `element.style.backgroundColor`

    + CSS variables: `document.documentElement.style.setProperty('--var', value)`

  + Persistence

    + Save user’s styling preferences with `localStorage`. WordPress does also provide out of the box support for backend database persistence.

[Back to Top](#learning-companion-app)

### Learning Goals of this project

+ `Aspect 1` - Flashcards / Quizzes

  + Create Flashcard

    +  Form handling: `.value` from inputs (question + answer)

    +  Node creation: `createElement`, `appendChild` to add card

  + Flip Card (Show/Hide Answer)

    DOM traversal: click card → toggle `.flipped` class

    Styling via class toggle (rotate/flip effect with CSS)

  + Delete/Edit Card

    +  Event handling on dynamically generated elements

  + Persistence

    +  Save flashcards to localStorage

  + Label Example: "Demonstrates: Form Handling, Node Creation, Class Toggling, Local Storage"

+ `Aspect 2` - Flashcards / Quizzes

  + Checklist of Topics

    + Checkbox handling: .checked state from inputs

    + Event listeners to update progress bar

  + Progress Bar

    + Styling with inline styles (style.width = '60%')

    + Updating text dynamically (e.g., 3 of 5 complete)

  + Persistence

    + Save checklist state in localStorage

  + Label Example: “Demonstrates: Input Handling, Dynamic Styling, Local Storage”  

+ `Aspect 3` - Daily Quote Generator

  + Static / User-Added Quotes

    + Node creation for each quote entry

    + Storage: Save user quotes in localStorage

  + Random Generator

    + Randomly select from stored quotes and update DOM (textContent)

  + Label Example: “Demonstrates: Node Creation, Random DOM Updates, Local Storage”

+ `Aspect 4` - Theme & Layout Control

  + Modes (Focus vs Study)

    + Button toggles CSS class on <body>

    + Optionally: switch grid/list layouts with JS (class toggle)

  + Persistence

    + Save selected theme in localStorage

  + Label Example: “Demonstrates: Class Manipulation, Styling via JS, Local Storage”

#### Summary

+ Features
  + **Flashcards:**	
   Form Handling, Node Creation, Traversal, Class Toggling, Storage
  + **Progress Tracker:**	
    + Input Handling, Dynamic Styling, Storage
  + **Daily Quote:**	
    + Node Creation, Random DOM Updates, Storage
  + **Theme/Layout:**	
    + Class Manipulation, Styling via JS, Storage

+ Learning App
  + **Concept:** Flashcards (pre-determined), quizzes, visual progress tracker, motivational quotes
  + **Strengths:** Fun & educational, interactive elements
  + **DOM Features Used:** Traversal, event delegation, progress bar, localStorage



[Back to Top](#learning-companion-app)

## License


[Back to Top](#learning-companion-app)