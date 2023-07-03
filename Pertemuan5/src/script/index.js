var person1 = new Person("Irvan", "Shandika");
person1.showName();


function Person(firstName, lastName) {
  this.firstName = firstName;
  this.lastName = lastName;

  this.fullName = function () {
    return `${this.firstName} ${this.lastName}`;
  };
  this.showName = function () {
    document.write(this.fullName());
  };
}

console.log(Math.round(2.9));
console.log(Math.random());

console.log(Math.min(3,2,2,1,4));
console.log(Math.max(3,2,2,1,4));
