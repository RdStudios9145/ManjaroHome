// Copyright (c) FIRST and other WPILib contributors.
// Open Source Software; you can modify and/or share it under the terms of
// the WPILib BSD license file in the root directory of this project.

package frc.robot.subsystems;

import com.revrobotics.CANSparkMax;
import com.revrobotics.CANSparkMaxLowLevel.MotorType;

import edu.wpi.first.wpilibj.XboxController;
import edu.wpi.first.wpilibj2.command.CommandBase;
import edu.wpi.first.wpilibj2.command.SubsystemBase;

public class ExampleSubsystem extends SubsystemBase {
  private final CANSparkMax motor = new CANSparkMax(1, MotorType.kBrushless);
  private final CANSparkMax motor2 = new CANSparkMax(2, MotorType.kBrushless);
  private final XboxController controller = new XboxController(0);
  // private final JoystickButton button = new JoystickButton(controller, XboxController.Button.kRightBumper.value);
  // private final joys joystick = controller.get;
  /** Creates a new ExampleSubsystem. */
  public ExampleSubsystem() {
    motor2.follow(motor);
  }

  /**
   * Example command factory method.
   *
   * @return a command
   */
  public CommandBase exampleMethodCommand() {
    // Inline construction of command goes here.
    // Subsystem::RunOnce implicitly requires `this` subsystem.
    return runOnce(
        () -> {
          /* one-time action goes here */
        });
  }

  /**
   * An example method querying a boolean state of the subsystem (for example, a digital sensor).
   *
   * @return value of some boolean subsystem state, such as a digital sensor.
   */
  public boolean exampleCondition() {
    // Query some boolean state, such as a digital sensor.
    return false;
  }

  @Override
  public void periodic() {
    // This method will be called once per scheduler run
    // System.out.println("hi!");
    // System.out.println(controller.getAButton());
    // System.out.println(controller.getLeftX());
    if (controller.getAButton())
      motor.set(controller.getLeftX() * 0.3);
  }

  @Override
  public void simulationPeriodic() {
    // This method will be called once per scheduler run during simulation
  }
}
