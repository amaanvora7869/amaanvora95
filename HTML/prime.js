function isPrime(number) {
    if (number <= 1) {
        return `${number} is neither prime nor composite.`;
    }

    if (number === 2) {
        return `${number} is a prime number.`;
    }

    for (let i = 2; i <= Math.sqrt(number); i++) {
        if (number % i === 0) {
            return `${number} is a composite number.`;
        }
    }

    return `${number} is a prime number.`;
}

// Prompt the user for a number
const userInput = prompt("Enter a number to check if it is prime or composite:");
const number = parseInt(userInput);

// Check if the input is a valid number
if (isNaN(number)) {
    alert("Please enter a valid number.");
} else {
    // Display the result in an alert box
    alert(isPrime(number));
}
