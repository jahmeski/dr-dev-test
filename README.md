# **Task: Implement Event Conflict Resolution and Timezone**

**Repo**  
https://github.com/Dog-Rooster/dev-test

**To Get Started**

1. Fork this repo
2. Clone the forked repo to your local machine
3. Run `composer install`
4. Run `php artisan migrate`
5. Run `php artisan db:seed`
6. Run `npm install`
7. Run `npm run dev`
8. Run `php artisan serve`
9. When ready, make a pull request to the original repo and notify our team.
10. In your PR, please include a video walkthrough of your solution/changes.

## **Current State of Application**

This is a simple application that allows frontend users to choose an event and select a date and time to book the event. No login or authentication is required.

This application is a very simple version of something like Calendly, Cal.com, or Acuity.

The application is bootstrapped with Laravel Breeze using Tailwind css framework. Feel free to make any changes you deem necessary including using other libraries/tools to complete the requirements.

## **Objective of the Test**

Enhance the existing event booking system by implementing a sophisticated conflict resolution feature and integrating a remote calendar. This feature should allow users to book events while intelligently handling/avoiding potential conflicts with the integrated calendar.

## **Requirements**

1. Integrate a third party calendar such as Google Calendar. This does not need any UI and can be coded into the backend only.
2. Create a collision detection and resolution system that prevents frontend users from double booking events on the calendar.
3. Allow frontend users to select or change their time zone when booking.

**Stretch Goals**

1. Create a notification system to send confirmation emails with the .ics attachment.
2. Create a notification system to send event reminders 1 hour before the meeting time.
3. Restrict booking times to a schedule such as Monday-Friday 8am \- 5pm.

## **Criteria for Evaluation**

1. **Code Quality**
    - The code should be clean, maintainable, and follow Laravel and php best practices.
    - Proper use of design patterns (e.g., Strategy, Observer) where applicable.
2. **Scalability & Performance**
    - The solution should be scalable to handle a large number of bookings without significant performance degradation.
    - Consideration for database indexing, query optimization, and efficient use of resources.
3. **Problem Solving & Creativity**
    - The ability to solve complex problems in innovative ways.
    - Creative approaches to conflict resolution.
    - The ability to create a UI and user experience that is straightforward and practical. We aren’t looking for you to be a designer, but you must make good common sense decisions when it comes to UI.
4. **Testing & Reliability**
    - The presence of comprehensive tests to cover various scenarios.
    - The ability to handle edge cases and ensure the reliability of the system.
5. **Communication**
    - Clarity in the provided documentation.
    - Ability to explain the reasoning behind decisions and approaches taken.
