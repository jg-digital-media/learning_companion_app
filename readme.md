# Learning Companion App
At its very earliest stages of development. Due for completion in 2026. Check back for updates. 

Last Updated: `20-10-2025 - 16:11`

## Sections

+ [Tasks](#tasks) | [User Flow Notes](#user-flow-notes) | [Development](#development) | [Notes](#notes) | [Learning Goals](#learning-goals-of-this-project) | [License](#license)

[Back to Top](#learning-companion-app)

## Tasks 

+ Tasks `14` Completed `1`

+ `TODO: ` - Finish Wireframe - concept for app 
+ `COMPLETED: 16-10-2025` - Add a sample set of quotes for the app and store in JSON `data/daily_quotes/quotes.json`
+ `TODO: ` - Build markup for the app
  + `TODO: ` - Finalise toggling of `.navigation` element visibility visibility
    + `TODO: ` - Fade in or slide in?
  + `TODO: ` - Build markup for app home screen `index.html`
  + `TODO: ` - Build markup for the flashcards `cards.html`
  + `TODO: ` - Build markup for the progress tracker `quiz.html`
  + `TODO: ` - Build markup for the checklist `checklists.html`
     
  + `TODO: ` - Build markup for the daily quote `motivation.html`
+ `TODO: ` - Plan Font Stack
+ `TODO: ` - Reset progress tracking on button click
+ `TODO: ` - Quiz/Triva Flashcards. - flip cards to see answer.  - Try for flip animations.
+ `TODO: ` - When ready, get an estimate the size in bytes/megabytes if appropriate it'll take to store progress tracking in `.localStorage`. 


[Back to Top](#learning-companion-app)


# User Flow Notes

+ Cards will be pre-determined.  Users will be able to mark cards as completed and watch the progress bar update as they go.  That's the general idea of the app.

[Back to Top](#learning-companion-app)

## Development

+ At the moment I'm at the Wireframe stage of the app. This will be followed by developing the building the HTML/PHP - the markup before prototyping with CSS and JavaScript.

+ `17-10-2025` - Finished the wireframe and build the markup and styling for the homepage along with configuration variables - which will help me when finalising the final fonts; colours and other things.  I've added template files for each page type in the prototype. Evemtually these will be replaced as PHP Templates.

+ `20-10-2025` - I've added a rudimentary navigation menu to one of the page templates that toggles visibility at the click of a button. As it stands, it's functionally there, but the fade effect isn't quite transitioning correctly, where we've got a delay in the child elements fading out.  It's been logged as a visual bug.

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