/*

Pulled From The Pizza Website, The followting catagories: Pizza, Salad, and Starters


*/



/*

Margherita $12.50
Fresh tomatoes, fresh mozzarella, fresh basil

Formaggio $15.50
Four cheeses (mozzarella, parmesan, pecorino, jarlsberg)

Chicken $17.00
Fresh tomatoes, mozzarella, chicken, onions

Pineapple'o'clock $16.50
Fresh tomatoes, mozzarella, fresh pineapple, bacon, fresh basil

Meat Town Hot! $20.00
Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken

Parma New $21.50
Fresh tomatoes, mozzarella, parma, bacon, fresh arugula
*/




INSERT INTO menu ( menu_item_category, menu_item_name, menu_item_description, menu_item_emphasis, menu_item_price) VALUES ('Pizza','Marherita', 'Fresh tomatoes, fresh mozzarella, fresh basil',NULL,12.50);

INSERT INTO menu ( menu_item_category, menu_item_name, menu_item_description, menu_item_emphasis, menu_item_price) VALUES ('Pizza','Formaggio', 'Four cheeses (mozzarella, parmesan, pecorino, jarlsberg)',NULL,15.50);


INSERT INTO menu ( menu_item_category, menu_item_name, menu_item_description, menu_item_emphasis, menu_item_price) VALUES ('Pizza','Chicken', 'Fresh tomatoes, mozzarella, chicken, onions',NULL,17.50);


INSERT INTO menu ( menu_item_category, menu_item_name, menu_item_description, menu_item_emphasis, menu_item_price) VALUES ('Pizza','Pinapple o clock', 'Fresh tomatoes, mozzarella, fresh pineapple, bacon, fresh basil',NULL,16.50);


INSERT INTO menu ( menu_item_category, menu_item_name, menu_item_description, menu_item_emphasis, menu_item_price) VALUES ('Pizza','Meat Town', 'Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken',NULL,20.00);

INSERT INTO menu ( menu_item_category, menu_item_name, menu_item_description, menu_item_emphasis, menu_item_price) VALUES ('Pizza','Parma', 'Fresh tomatoes, mozzarella, parma, bacon, fresh arugula',NULL,21.50);

/*
Lasagna Popular$13.50
Special sauce, mozzarella, parmesan, ground beef

Ravioli$14.50
Ravioli filled with cheese

Spaghetti Classica$11.00
Fresh tomatoes, onions, ground beef

Seafood pasta$25.50
Salmon, shrimp, lobster, garlic

*/

INSERT INTO menu ( menu_item_category, menu_item_name, menu_item_description, menu_item_emphasis, menu_item_price) VALUES ('Salad','Lasagna', 'Special sauce, mozzarella, parmesan, ground beef',NULL,13.50);

INSERT INTO menu ( menu_item_category, menu_item_name, menu_item_description, menu_item_emphasis, menu_item_price) VALUES ('Salad','Ravioli', 'Ravioli filled with cheese',NULL,14.50);

INSERT INTO menu ( menu_item_category, menu_item_name, menu_item_description, menu_item_emphasis, menu_item_price) VALUES ('Salad','Spaghetti Classica', 'Fresh tomatoes, onions, ground beef',NULL,11.00);

INSERT INTO menu ( menu_item_category, menu_item_name, menu_item_description, menu_item_emphasis, menu_item_price) VALUES ('Salad','Seafood Pasta', 'Salmon, shrimp, lobster, garlic',NULL,25.50);



/*
Starter
Today's Soup Seasonal $5.50
Ask the waiter

Bruschetta $8.50
Bread with pesto, tomatoes, onion, garlic

Garlic bread $9.50
Grilled ciabatta, garlic butter, onions

Tomozzarella $10.50
Tomatoes and mozzarella

*/

INSERT INTO menu ( menu_item_category, menu_item_name, menu_item_description, menu_item_emphasis, menu_item_price) VALUES ('Starter','Today Soup Seasonal', 'Ask the waiter',NULL,5.50);

INSERT INTO menu ( menu_item_category, menu_item_name, menu_item_description, menu_item_emphasis, menu_item_price) VALUES ('Starter','Brushetta', 'Bread with pesto, tomatoes, onion, garlic',NULL,8.50);

INSERT INTO menu ( menu_item_category, menu_item_name, menu_item_description, menu_item_emphasis, menu_item_price) VALUES ('Starter','Garlic Bread', 'Grilled ciabatta, garlic butter, onions',NULL,9.50);

INSERT INTO menu ( menu_item_category, menu_item_name, menu_item_description, menu_item_emphasis, menu_item_price) VALUES ('Starter','Tomozzarella', 'Tomatoes and mozzarella',NULL,10.50);
