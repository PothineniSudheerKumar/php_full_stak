list_values = ["apple","banana","orange"];

# list items access
print(list_values[0]);
print(list_values[-1]);
print(list_values[0:1]);
print(list_values[-2:-1]);
if "apple" in list_values:
    print('success');
print(type(list_values));
print(len(list_values));

#list items change
print(list_values);
list_values[1]="beetroot";
list_values[1:2]=["carrot"];
list_values[0:2]=["aalu"];
list_values.insert(2,'tomato');
print(list_values);

#list items add
print(list_values);
list_values.append("brinjal");
list_values2 = ["apples","bananas","oranges"];
list_values.extend(list_values2);
print(list_values);

#list items remove
print(list_values);
list_values.pop(2);
list_values.pop();
list_values.remove("apples");
del list_values[0];
#del list_values;
list_values.clear();
print(list_values);