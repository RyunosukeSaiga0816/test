/**
 *
 */

/**
 * @author internoudev
 *
 */
public class Test {



	/**
	 * @param args
	 */
	public static void main(String[] args) {
		// TODO 自動生成されたメソッド・スタブ

		Person jiro=new Person();
		Person hanako=new Person();
		jiro.name="木村次郎";
		jiro.age=18;
		jiro.phoneNumber="090-1234-5678";
		jiro.addless="aaa@yahoo.co.jp";
		hanako.name="鈴木花子";
		hanako.age=16;
		hanako.phoneNumber="080-1234-5678";
		hanako.addless="zzz@gmail.com";
		System.out.println(jiro.name);
		System.out.println(jiro.age);
		System.out.println(jiro.phoneNumber);
		System.out.println(jiro.addless);
		System.out.println(hanako.name);
		System.out.println(hanako.age);
		System.out.println(hanako.phoneNumber);
		System.out.println(hanako.addless);
		Robot aibo=new Robot("aibo");
		aibo.talk();
		aibo.walk();
		aibo.run();
		Robot asimo=new Robot("asimo");
		asimo.talk();
		asimo.walk();
		asimo.run();
		Robot pepper=new Robot("pepper");
		pepper.talk();
		pepper.walk();
		pepper.run();
		Robot doraemon=new Robot("doraemon");
		doraemon.talk();
		doraemon.walk();
		doraemon.run();
	}

}
