# Car Race Simulator
A car race simulator in PHP.

# Rules
1. Track is 2000 elements. Elements are either curves or straights.
2. Track is about 50% curves and 50% straights.
3. The elements on the track come in multiples of 40 of the same type.
4. Each car has a total speed of 22. The minimum speed of each type, curve and straight, is 4. The speed is the number of elements a car can advance per round on a particular element type.
5. If a car starts a round on an element type, it can only end the round on the same element type, or on the first element of the next sequence of elements, if it has enough speed to reach it.
6. The first car that arrives at the last element wins. 
7. The outcome of a race is represented by the class RaceResult, which in turn contains a list of RoundResult objects. A RoundResult is an object with two elements, a round number and a cars position array. The cars position array represents the position on the track of each car on a given round.
8. There are 5 cars.

