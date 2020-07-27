package application;

//import java.awt.Color;
import java.io.IOException;
import java.net.URL;
//import java.util.ArrayList;
//import java.util.Collection;
import java.util.Collections;
import java.util.LinkedList;
//import java.util.List;
import java.util.ResourceBundle;

import javax.swing.JOptionPane;

import javafx.scene.text.Font;
//import javafx.scene.text.Text;
import javafx.scene.paint.Color;
import javafx.scene.layout.*;

import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
//import javafx.geometry.Insets;
import javafx.scene.control.Button;
import javafx.scene.control.TextField;
import javafx.scene.layout.AnchorPane;
//import javafx.scene.layout.Background;
//import javafx.scene.layout.BackgroundFill;
//import javafx.scene.layout.CornerRadii;
//import javafx.scene.layout.HBox;
import javafx.scene.layout.VBox;

public class ControllerQueue implements Initializable {
	public LinkedList<String> stack = new LinkedList<String>();
	@FXML
	private AnchorPane pane;
	@FXML
	private TextField input;
	@FXML
	private Button pop;
	@FXML
	private Button push;
	@FXML
	private Button deletequeue;
//	@FXML
//	private Button no1, no2, no3, no4, no5, no6, no7, no8, no9, no10, no11, no12;
//	@FXML
//	private Button dbtn;
	@FXML
	private VBox hboxx;
	LinkedList<Button> buttons = new LinkedList<Button>();
	
	Stack q = new Stack();
	final int WIDTH = 300;
	final int HEIGHT = 50;
	
		
	public void setText2(LinkedList<String> stack) {
		Collections.reverse(stack);
		buttons.clear();
		stack.forEach(s -> {
			Button dbtn = new Button(s);
			dbtn.setMaxWidth(WIDTH);
			dbtn.setMinWidth(WIDTH);
			dbtn.setMinHeight(HEIGHT);
			dbtn.setMaxHeight(HEIGHT);
			dbtn.setFont(Font.font ("Verdana", 20));
			dbtn.setTextFill(Color.BLUE);
			
			dbtn.setBackground(Background.EMPTY);
			String style = "-fx-background-color:PINK;";
			dbtn.setStyle(style);
			dbtn.setBorder(new Border(new BorderStroke(Color.BLUE, BorderStrokeStyle.SOLID, CornerRadii.EMPTY, new BorderWidths(2))));
			buttons.add(dbtn);
		});
		hboxx.getChildren().clear();
		hboxx.getChildren().addAll(buttons);
		hboxx.setBackground(Background.EMPTY);
		hboxx.setBorder(new Border(new BorderStroke(Color.BLUE, BorderStrokeStyle.SOLID, CornerRadii.EMPTY, new BorderWidths(0))));
		
		Collections.reverse(stack);		
	}

	public void push(ActionEvent event) {
		String str = input.getText();
		if (str.equals("")) {
			JOptionPane.showMessageDialog(null, "Enter the input!!");
			return;
		}
		if (!str.equals("")) {
			stack.add(str);
//			clearText();
			setText2(stack);
			input.clear();
		}
	}

	public void pop(ActionEvent event) {
		if (stack.size() == 0) {
			JOptionPane.showMessageDialog(null, "Stack is EMPTY!");
			return;
		}
		stack.pollLast();
//		clearText();
		setText2(stack);
	}

	public void back() throws IOException {
		AnchorPane child = FXMLLoader.load(getClass().getResource("HomePage.fxml"));
		pane.getChildren().setAll(child);
	}
	
	public void deleteStack() {
		int deleteCount = stack.size();
		
		if (stack.size() == 0) {
			JOptionPane.showMessageDialog(null, "Stack is EMPTY!");
			return;
		}
		
		for(int i = 0; i < deleteCount; i++) {
			stack.pollLast();
//			clearText();
			setText2(stack);
		}
	}

	@Override
	public void initialize(URL location, ResourceBundle resources) {
		// TODO Auto-generated method stub
	}
}
