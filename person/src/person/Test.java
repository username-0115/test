package person;

public class Test {

	public static void main(String[] args){

		Person taro = new Person();
		taro.name="山田太郎";
		taro.age=20;
		taro.phoneNumber=null;
		taro.address=null;

		System.out.println(taro.name);
		System.out.println(taro.age);
		System.out.println(taro.phoneNumber);
		System.out.println(taro.address);
		taro.talk();
		taro.walk();
		taro.run();


		Person jiro = new Person();
		jiro.name="木村次郎";
		jiro.age=18;
		jiro.phoneNumber=null;
		jiro.address=null;

		System.out.println(jiro.name);
		System.out.println(jiro.age);
		System.out.println(jiro.phoneNumber);
		System.out.println(jiro.address);
		jiro.talk();
		jiro.walk();
		jiro.run();


		Person hanako = new Person();
		hanako.name="鈴木花子";
		hanako.age=16;
		hanako.phoneNumber=null;
		hanako.address=null;

		System.out.println(hanako.name);
		System.out.println(hanako.age);
		System.out.println(hanako.phoneNumber);
		System.out.println(hanako.address);
		hanako.talk();
		hanako.walk();
		hanako.run();


		Person maiko = new Person();
		maiko.name="戸張舞依子";
		maiko.age=26;
		maiko.phoneNumber=null;
		maiko.address=null;

		System.out.println(maiko.name);
		System.out.println(maiko.age);
		System.out.println(maiko.phoneNumber);
		System.out.println(maiko.address);
		maiko.talk();
		maiko.walk();
		maiko.run();


		Person aibo = new Person();
		aibo.name="aibo";

		System.out.println(aibo.name);
		aibo.talk();
		aibo.walk();
		aibo.run();

		Person asimo = new Person();
		asimo.name="asimo";

		System.out.println(asimo.name);
		asimo.talk();
		asimo.walk();
		asimo.run();

		Person pepper = new Person();
		pepper.name="pepper";

		System.out.println(pepper.name);
		pepper.talk();
		pepper.walk();
		pepper.run();


	}

}
