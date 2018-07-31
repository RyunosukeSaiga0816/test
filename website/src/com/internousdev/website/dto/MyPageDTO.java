package com.internousdev.website.dto;

public class MyPageDTO {
	private String itemName;
	private String totalPrice;
	private String totalCount;
	private String payment;
	private String insert_date;
	private String id;
	private String userName;

	public String getItemName(){
		return itemName;
	}
	public void setItemName(String itemName){
		this.itemName=itemName;
	}
	public String getTotalPrice(){
		return totalPrice;
	}
	public void setTotalPrice(String totalPrice){
		this.totalPrice=totalPrice;
	}
	public String getTotalCount(){
		return totalCount;
	}
	public void setTotalCount(String totalCount){
		this.totalCount=totalCount;
	}
	public String getPayment(){
		return payment;
	}
	public void setPayment(String payment){
		this.payment=payment;
	}
	public String getInsert_date(){
		return insert_date;
	}
	public void setInsert_date(String insert_date){
		this.insert_date=insert_date;
	}
	public String getId(){
		return id;
	}
	public void setId(String id){
		this.id=id;
	}
	public String getUserName(){
		return userName;
	}
	public void setUserName(String userName){
		this.userName=userName;
	}

}
