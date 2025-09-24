# Learning Companion App
At its very earliest stages of development. Due for completion in 2026. Check back for updates. 

Last Updated: `24-09-2025 - 15:05`

## Sections

+ [Tasks](#tasks) | [Development](#development) | [Notes](#notes) | [Learning Goals](#learning-goals-of-this-project) | [License](#license)

[Back to Top](#learning-companion-app)

## Tasks 

+ Tasks `4` Completed `0`


+ `TODO:` - Finish Wireframe - concept for app 
<!-- `COMPLETED: 00-00-0000` - -->
+ `TODO:` - Reset progress tracking on button click
+ `TODO:` - Quiz/Triva Flashcards. - flip cards to see answer.  - Try for flip animations.
+ `TODO:` - Estimate the size in bytes/megabytes if appropriate it'll take to stOre progress tracking in `.localStorage`. 

[Back to Top](#learning-companion-app)

## Development

### User flow notes
+ Cards will be pre-determined.  Users will be able to mark cards as completed and watch the progress bar update as they go..

[Back to Top](#learning-companion-app)

## Notes 


  + Change Background / Fonts

    + Inline styling via JS: `element.style.backgroundColor`

    + CSS variables: `document.documentElement.style.setProperty('--var', value)`

  + Persistence

    + Save user’s styling preferences with `localStorage`

  + Label Example: "Demonstrates: Styling via JavaScript, CSS Variables, Local Storage"

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