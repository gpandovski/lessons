# Lesson 52

Today we have overview of Access control systems[ACS] and types of ACS

##  Access control systems

### ACL: Access Control List

 This is your basic gatekeeper — ACL has a list of users and a simple yes/no... like a doorman at an exclusive club, "Nope, your name isn't on the list, you can't come in..." But once you're in, you're in and can do anything.

 ### RBAC : Role-Based Access Controll

 Obviously, we need more granular control than ACL, so we started implementing Role-Based Access Control. 
 Person X has certain role granted to them like "User" and/or "Admin" — 
 these roles are then used to inform the systems of what that person is allowed to do.     

 Now, the doorman lets you in, but you have to have the pink wristband to get into the bar and a yellow wristband to get into the card game in the back.

### PBAC / ABAC : Policy Based Access Controll and Attribute-Based Access Control

ABAC    
As the word "attribute" implies, ABAC has an extra wrinkle of additional, contextual rules. You and I might both have a pink wristband, but you're not 21. So, I can get into the bar because of some specific attribute about me, and you're prohibited because of some specific attribute about you.

PBAC   
 The only real difference between ABAC and PBAC is that ABAC has some XML standards to inform the policies. Now think of it this way: you have the pink wristban and you're of age, but you only have a state ID and we really only know how to read passports. The rules of enforcement are the same, but ABAC is a bit more technically restrictive.    


 Be aware that sometimes people mix this types and usually call ```ACL``` any type of some access control system, which could relate to ACL itself, RBAC or PBAC/ABAC. 