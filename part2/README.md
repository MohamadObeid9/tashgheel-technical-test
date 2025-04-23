# Part 2

## First Issue

```js
let name = document.getElementById("Name").value;
```

We are trying to get an element with the ID `"Name"`, which doesn't exist. The correct ID is in lowercase, so we should update it to match the input's ID.

### Solution

```js
let name = document.getElementById("name").value;
```

---

## Second Issue

```js
alert('Student ' + name ' added');
```

When combining a variable and a string, we should use two `+` operators.

### Solution

```js
alert("Student " + name + " added");
```

---

## Third, Fourth, and Fifth Issues

```js
studentList.appendChild("<li>" + name + "</li>"); //#3#4#5
```

### Third Issue

We cannot use `studentList` because it has not been selected yet.

#### Solution

```js
let studentList = document.getElementById("studentList");
```

### Fourth Issue

We cannot append `("<li>" + name + "</li>")` directly. We need to create a list element first.

#### Solution

```js
let list = document.createElement("li");
```

### Fifth Issue

We cannot insert the value of `name` like `("<li>" + name + "</li>")`. Instead, we need to set the text content of the newly created list element.

#### Solution

```js
list.textContent = name;
```

Finally, we can append the list element to `studentList`:

```js
studentList.appendChild(list);
```
